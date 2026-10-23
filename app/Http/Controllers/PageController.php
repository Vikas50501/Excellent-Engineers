<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home page — all 13 sections
     */
    public function home()
    {
        $stats = [
            ['tag' => 'DATA // 01', 'target' => 15, 'suffix' => '+', 'label' => 'Years of Specialized Engineering Experience'],
            ['tag' => 'DATA // 02', 'target' => 200, 'suffix' => '+', 'label' => 'Process Plants & Systems Delivered Across India'],
            ['tag' => 'DATA // 03', 'target' => 6, 'suffix' => '+', 'label' => 'Core Industries Served: Food, Pharma, Chemical, Bio-Tech'],
            ['tag' => 'DATA // 04', 'target' => 18, 'suffix' => '+', 'label' => 'Indian States Covered by Installation & Service Network'],
        ];

        $productFamilies = [
            [
                'id' => 'dryers',
                'num' => 'SYSTEM // 01',
                'title' => 'Industrial Dryers',
                'image' => 'images/spray-dryer-plant.jpg',
                'desc' => 'Spray, Fluid Bed, Flash & Rotary Dryers built for uniform particle size distribution, precise moisture control, and energy-conserving airflow handling.',
                'subproducts' => '4 Equipment Lines',
                'link' => route('products') . '#tab-dryers'
            ],
            [
                'id' => 'evaporators',
                'num' => 'SYSTEM // 02',
                'title' => 'Evaporators',
                'image' => 'images/evaporator-plant.jpg',
                'desc' => 'Falling Film, Scraped Surface & Forced Circulation Evaporators designed for thermal economy, low residence degradation, and non-clogging high-solids concentration.',
                'subproducts' => '3 Equipment Lines',
                'link' => route('products') . '#tab-evaporators'
            ],
            [
                'id' => 'biotech',
                'num' => 'SYSTEM // 03',
                'title' => 'Bio-Technology Plants',
                'image' => 'images/fermentation-distillery.jpg',
                'desc' => 'Fermentation, Distillation & Fuel Ethanol Plants engineered for maximum conversion yield, continuous regulatory compliance, and thermal energy integration.',
                'subproducts' => 'Turnkey Systems',
                'link' => route('products') . '#tab-biotech'
            ]
        ];

        $processSteps = [
            ['num' => '01', 'title' => 'Understand', 'body' => 'Site visit, process data collection, feed rheology analysis, moisture targets, and facility constraint discussion.'],
            ['num' => '02', 'title' => 'Design', 'body' => 'Process & mechanical engineering, thermal calculations, P&IDs, mass-energy balances, and 3D GA drawings.'],
            ['num' => '03', 'title' => 'Build', 'body' => 'In-house fabrication at our Moi works under strict ASME/IS welding codes and logged dimensional inspections.'],
            ['num' => '04', 'title' => 'Install', 'body' => 'On-site erection, utility interconnects, trial test runs, and output capacity/purity performance validation.'],
            ['num' => '05', 'title' => 'Support', 'body' => 'Structured operator training, preventive maintenance contracts, performance audits, and genuine OEM spares.'],
        ];

        $industries = [
            ['num' => '01.', 'title' => 'Food & Food Processing', 'desc' => 'Starch drying, flavors, vegetable proteins, food-grade powders, and thermal vacuum juice concentration.'],
            ['num' => '02.', 'title' => 'Pharmaceuticals & Nutraceuticals', 'desc' => 'Active Pharmaceutical Ingredients (APIs), granulation, herb extracts, and cGMP-compliant sanitary contact parts.'],
            ['num' => '03.', 'title' => 'Dairy & Milk Products', 'desc' => 'Whole and skimmed milk powder, whey concentration, lactose drying, and multi-effect falling film evaporation.'],
            ['num' => '04.', 'title' => 'Chemicals & Specialty Chemicals', 'desc' => 'Dyes, pigments, industrial salts, chemical cake flash drying, and zero-liquid-discharge (ZLD) effluent plants.'],
            ['num' => '05.', 'title' => 'Distilleries & Bio-Fuel / Ethanol', 'desc' => 'Grain & molasses fermentation, continuous rectification columns, and turnkey 99.8% fuel ethanol plants.'],
            ['num' => '06.', 'title' => 'Agro & Allied Processing', 'desc' => 'Fertilizers, agro-chemicals, bio-mass, animal feed drying, and continuous heavy-duty rotary processing drums.'],
        ];

        return view('pages.home', compact('stats', 'productFamilies', 'processSteps', 'industries'));
    }

    /**
     * About Us page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Products catalogue
     */
    public function products()
    {
        return view('pages.products');
    }

    /**
     * Installed projects & gallery
     */
    public function gallery()
    {
        return view('pages.gallery');
    }

    /**
     * Maintenance & After-Sales support
     */
    public function maintenance()
    {
        return view('pages.maintenance');
    }
}
