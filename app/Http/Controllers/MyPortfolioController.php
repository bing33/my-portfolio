<?php
/**
 * Created by IntelliJ IDEA.
 * User: xiaobingrawlinson
 * Date: 7/2/18
 * Time: 1:47 PM
 */

namespace App\Http\Controllers;


class MyPortfolioController extends Controller
{
    public function showAboutMe()
    {
        return view('about-me');
    }

    public function showEducation()
    {
        return view('education');
    }

    public function showWorkExperience()
    {
        return view('work-experience');
    }

    public function showSkills()
    {
        return view( 'skills');
    }

    public function downloadResume(){
        return 'Resume';
    }
}