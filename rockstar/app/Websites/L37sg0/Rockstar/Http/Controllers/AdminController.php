<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\SocialLink;
use L37sg0\Rockstar\Models\TourDate;
use L37sg0\Rockstar\Models\Website;

class AdminController extends Controller
{
    /**
     * Section for editing website icon
     */
    public function iconSection(Request $request) {
        $icon = Website::first()->getAttribute(Website::FIELD_ICON_URL);
        return view('rockstar::admin.icon', compact('icon'));
    }

    /**
     * Section for editing home images
     */
    public function homeSection() {
        $homeImages = [
            Website::first()->getAttribute(Website::FIELD_FIRST_HOME_IMAGE_URL),
            Website::first()->getAttribute(Website::FIELD_SECOND_HOME_IMAGE_URL),
            Website::first()->getAttribute(Website::FIELD_THIRD_HOME_IMAGE_URL)
        ];
        return view('rockstar::admin.home', compact('homeImages'));
    }

    /**
     * Section for editing band images and text
     */
    public function bandSection() {
        $bandText = Website::first()->getAttribute(Website::FIELD_BAND_TEXT);
        $bandMembers = BandMember::all();
        return view('rockstar::admin.band', compact(
            'bandMembers',
            'bandText'
        ));
    }

    /**
     * Section for editing tour upcoming dates
     */
    public function tourSection() {
        $tourDates = TourDate::orderBy(TourDate::FIELD_DATE, 'ASC')->get();
        return view('rockstar::admin.tour', compact('tourDates'));
    }

    /**
     * Section for editing contact form image
     */
    public function contactSection() {
        $contactImage = Website::first()->getAttribute(Website::FIELD_CONTACT_IMAGE_URL);
        return view('rockstar::admin.contact', compact('contactImage'));
    }

    /**
     * Section for editing social links on footer
     */
    public function socialSection() {
        $socialLinks = SocialLink::all();
        return view('rockstar::admin.social', compact('socialLinks'));
    }
}
