<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventDetail;
use App\Models\Staff;
use App\Models\StaffDetail;
use App\Models\Member;
use App\Models\MemberDetail;
use App\Models\Article;
use App\Models\ArticleDetail;
use DB;

class LandingController extends Controller
{
    /**
     * Landing Page - IADR
     */
    public function index(){
        $staffs = Staff::select('staff.*', DB::raw("CONCAT(staff.name,' ',staff.paternal, ' ', staff.maternal) as name_staff"))
                        ->with(['staffSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('state', 1)
                        ->get();
        // Miembro Investigador (1)
        $members = Member::select('member.*', DB::raw("CONCAT(member.name) as name_member"))
                        ->with(['memberSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('state', '=', 1)
                        ->where('rol', '=', 1)
                        ->get();
        // Miembro Meditante (2)
        $membersM = Member::select('member.*', DB::raw("CONCAT(member.name,' ',member.paternal, ' ', member.maternal) as name_member"))
                        ->with(['memberSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('state', '=', 1)
                        ->where('rol', '=', 2)
                        ->get();
                        
        $events = Event::select('events.*', DB::raw('CONCAT(
                                                    DATE_FORMAT(events.date,"%d"), " ",
                                                    CASE
                                                        WHEN DATE_FORMAT(events.date,"%m") = "01" THEN "ENERO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "02" THEN "FEBRERO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "03" THEN "MARZO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "04" THEN "ABRIL"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "05" THEN "MAYO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "06" THEN "JUNIO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "07" THEN "JULIO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "08" THEN "AGOSTO"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "09" THEN "SEPTIEMBRE"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "10" THEN "OCTUBRE"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "11" THEN "NOVIEMBRE"
                                                        WHEN DATE_FORMAT(events.date,"%m") = "12" THEN "DICIEMBRE"
                                                    END, " ", 
                                                    DATE_FORMAT(events.date,"%Y")) as dateM'))
                        ->where('state', 1)
                        ->with('area')
                        ->orderby('event_id', 'DESC')
                        ->paginate(3);
        $articles = Article::select('articles.*', 
                                DB::raw('DATE_FORMAT(articles.date, "%Y") as year'), 
                                DB::raw('CONCAT(
                                    DATE_FORMAT(articles.date,"%d"), " ",
                                    CASE
                                        WHEN DATE_FORMAT(articles.date,"%m") = "01" THEN "ENERO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "02" THEN "FEBRERO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "03" THEN "MARZO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "04" THEN "ABRIL"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "05" THEN "MAYO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "06" THEN "JUNIO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "07" THEN "JULIO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "08" THEN "AGOSTO"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "09" THEN "SEPTIEMBRE"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "10" THEN "OCTUBRE"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "11" THEN "NOVIEMBRE"
                                        WHEN DATE_FORMAT(articles.date,"%m") = "12" THEN "DICIEMBRE"
                                    END, " ", 
                                    DATE_FORMAT(articles.date,"%Y")) as dateM'))
                            ->with('area')
                            ->where('state', 1)
                            ->orderby('article_id', 'DESC')
                            ->paginate(4);
        return view('landingPage',[
            'staffs'   => $staffs,
            'members'  => $members,
            'membersM' => $membersM,
            'events'   => $events,
            'articles' => $articles
        ]);
    }
    /**
     * Buscar Articulo - IADR
     */
    public function article(Request $request){
        $search = empty($request->search) ? '' : $request->search;
        $articles = Article::select('articles.*' , 
                            DB::raw('CONCAT(
                                DATE_FORMAT(articles.date,"%d"), " ",
                                CASE
                                    WHEN DATE_FORMAT(articles.date,"%m") = "01" THEN "Ene"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "02" THEN "Feb"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "03" THEN "Mar"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "04" THEN "Abr"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "05" THEN "May"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "06" THEN "Jun"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "07" THEN "Jul"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "08" THEN "Ago"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "09" THEN "Sep"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "10" THEN "Oct"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "11" THEN "Nov"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "12" THEN "Dic"
                                END, " ", 
                                DATE_FORMAT(articles.date,"%Y")) as dateM'))
                            ->with('area')
                            ->where('state', 1)
                            ->name($search)
                            ->description($search)
                            ->resume($search)
                            ->orderby('article_id', 'DESC')
                            ->get();
        return view('article.list',[
            'articles'  =>  $articles,
            'search'    =>  $search
        ]);
    }
    /**
     * Buscar de Articulos - IADR
     */
    public function articleSearch($id = null, $name=''){
        $data = Article::select('articles.*', 
                            DB::raw('CONCAT(
                                DATE_FORMAT(articles.date,"%d"), " ",
                                CASE
                                    WHEN DATE_FORMAT(articles.date,"%m") = "01" THEN "Ene"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "02" THEN "Feb"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "03" THEN "Mar"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "04" THEN "Abr"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "05" THEN "May"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "06" THEN "Jun"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "07" THEN "Jul"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "08" THEN "Ago"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "09" THEN "Sep"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "10" THEN "Oct"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "11" THEN "Nov"
                                    WHEN DATE_FORMAT(articles.date,"%m") = "12" THEN "Dic"
                                END, " ", 
                                DATE_FORMAT(articles.date,"%Y")) as dateM'))
                        ->with('area')
                        ->where('article_id', $id)
                        ->where('state', 1)
                        ->first();
        $data_detail = ArticleDetail::where('article_id', $id)->where('state', 1)->get();
        return view('article.search',[
            'data'          => $data,
            'data_detail'   => $data_detail
        ]);
    }
    /**
     * Quienes Somos - IADR
     */
    public function about(){
        $staffs = Staff::select('staff.*', DB::raw("CONCAT(staff.name,' ',staff.paternal, ' ', staff.maternal) as name_staff"))
                        ->with(['staffSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('state', 1)
                        ->get();
        return view('about.list',[
            'staffs'  =>  $staffs
        ]);
    }
    /**
     * Buscar directorio - IADR
     */
    public function directorySearch($id=null, $name=''){
        $data = Staff::select('staff.*', DB::raw("CONCAT(staff.name,' ',staff.paternal, ' ', staff.maternal) as name_staff"))
                        ->with(['staffSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('staff_id', $id)
                        ->where('state', 1)
                        ->first();

        $data_detail = StaffDetail::where('staff_id', $id)->get();
        return view('directory.search',[
            'data'        => $data,
            'data_detail' => $data_detail
        ]);
    }
    /**
     * Buscar Miembro - IADR
     */
    public function memberSearch($id=null, $name=''){
        $data = Member::select('member.*', DB::raw("CONCAT(member.name,' ',member.paternal, ' ', member.maternal) as name_member"))
                        ->with(['memberSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('member_id', $id)
                        ->where('state', 1)
                        ->first();

        $data_detail = MemberDetail::where('member_id', $id)->get();
        return view('member.search',[
            'data'        => $data,
            'data_detail' => $data_detail
        ]);
    }
    /**
     * Membresía - IADR
     */
    public function membership(){
        return view('membership.list');
    }
    /**
     * Contactos - IADR
     */
    public function contact(){
        return view('contact.list');
    }
    /********************************************************/
    /**
     * Eventos
     */
    public function events(){
        // Todos los registros menos el ultimo evento
        $data = Event::select('events.*', 
                        DB::raw('DATE_FORMAT(events.date, "%Y") as year'), 
                        DB::raw('CONCAT(
                            DATE_FORMAT(events.date,"%d"), " DE ",
                            CASE
                                WHEN DATE_FORMAT(events.date,"%m") = "01" THEN "ENERO"
                                WHEN DATE_FORMAT(events.date,"%m") = "02" THEN "FEBRERO"
                                WHEN DATE_FORMAT(events.date,"%m") = "03" THEN "MARZO"
                                WHEN DATE_FORMAT(events.date,"%m") = "04" THEN "ABRIL"
                                WHEN DATE_FORMAT(events.date,"%m") = "05" THEN "MAYO"
                                WHEN DATE_FORMAT(events.date,"%m") = "06" THEN "JUNIO"
                                WHEN DATE_FORMAT(events.date,"%m") = "07" THEN "JULIO"
                                WHEN DATE_FORMAT(events.date,"%m") = "08" THEN "AGOSTO"
                                WHEN DATE_FORMAT(events.date,"%m") = "09" THEN "SEPTIEMBRE"
                                WHEN DATE_FORMAT(events.date,"%m") = "10" THEN "OCTUBRE"
                                WHEN DATE_FORMAT(events.date,"%m") = "11" THEN "NOVIEMBRE"
                                WHEN DATE_FORMAT(events.date,"%m") = "12" THEN "DICIEMBRE"
                            END, " DE ", 
                            DATE_FORMAT(events.date,"%Y")) as dateM'))
                        ->with('area')
                        ->where('state', 1)
                        ->orderBy('event_id', 'desc')
                        ->get();
        return view('events.list', [
            'data' => $data
        ]);
    }
    /**
     * Lista de Eventos - IADR
     */
    public function eventSearch($id = null, $name = ''){
        $data = Event::select('events.*')
                        ->with('area')
                        ->where('event_id', $id)
                        ->where('state', 1)
                        ->first();
        $data_detail = EventDetail::where('event_id', $id)
                        ->where('state', 1)
                        ->get();
        return view('events.search',[
            'data'         =>  $data,
            'data_detail'  =>  $data_detail
        ]);
    }
}
