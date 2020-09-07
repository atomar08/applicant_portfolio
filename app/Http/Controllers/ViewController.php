<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    function index()
    {
       
        $data = DB::select("select  q2.job_name as job_name, q1.applicant_name, q1.email, q1.website, q1.skills, q1.cover_letter from 
        (select  group_concat(distinct a.name) as applicant_name,a.email, a.website, group_concat(s.name) as skills , a.cover_letter from applicants as a inner join skills as s on a.id=s.applicant_id group by (a.name)) as q1 
        inner join
        (select group_concat(j.name) as job_name, a.name from jobs as j inner join applicants as a on j.id=a.job_id group by a.name) as q2
        on q1.applicant_name = q2.name");
        return view('applicant_view', compact('data'));
    }
}
?>

