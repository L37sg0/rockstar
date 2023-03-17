<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use L37sg0\Rockstar\Http\Requests\UpdateIconRequest;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\SocialLink;
use L37sg0\Rockstar\Models\TourDate;
use L37sg0\Rockstar\Models\Website;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Section for editing website icon
     */
    public function iconSection()
    {
        $website = Website::first();
        $icon = $website->getAttribute(Website::FIELD_ICON_URL);
        return view('rockstar::admin.icon', compact('icon'));
    }

    public function iconSectionUpdate(UpdateIconRequest $request)
    {
//        dd($request->all());
        $website = Website::first();
        $icon = $website->getAttribute(Website::FIELD_ICON_URL);

        if ($request->isMethod('post')) {
            $file = $request->file('icon');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/icons', $filename);

            $website->setAttribute(Website::FIELD_ICON_URL, str_replace('public', 'storage', $path));
            $website->save();

            return redirect()->back()->with('success', 'Icon updated successfully.');
        }
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
