<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use L37sg0\Rockstar\Http\Requests\UpdateHomeImageRequest;
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

    /**
     * @param UpdateIconRequest $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function iconSectionUpdate(UpdateIconRequest $request)
    {
        $website = Website::first();

        $file = $request->file('icon');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/icons', $filename);

        $website->setAttribute(Website::FIELD_ICON_URL, str_replace('public', 'storage', $path));
        $website->save();

        return redirect()->back()->with('success', 'Icon updated successfully.');
    }

    /**
     * Section for editing home images
     */
    public function homeSection()
    {
        $website = Website::first();

        $homeImages = [
            Website::FIELD_FIRST_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_FIRST_HOME_IMAGE_URL),
            Website::FIELD_SECOND_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_SECOND_HOME_IMAGE_URL),
            Website::FIELD_THIRD_HOME_IMAGE_URL => $website->getAttribute(Website::FIELD_THIRD_HOME_IMAGE_URL)
        ];
        return view('rockstar::admin.home', compact('homeImages'));
    }

    /**
     * @param UpdateHomeImageRequest $request
     * @param $imageName
     * @return RedirectResponse
     */
    public function homeSectionUpdate(UpdateHomeImageRequest $request, $imageName)
    {
        $website = Website::first();

        $file = $request->file('image');
        $filename = Str::random(20). '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/home-images', $filename);

        $website->setAttribute($imageName, str_replace('public', 'storage', $path));
        $website->save();

        return redirect()->back()->with('success', 'Image updated successfully.');
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
