<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

use App\Post;

class DummyPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'title'=>'NEW WAYS YOUNG DESIGNERS ARE REACHING CONSUMERS',
               'excerpt'=>'Neighborhood Goods is an innovative alternative to the traditional department store model...',
               'slug'=>'many-designers-started-to-realize-that-the-traditional',
                'body'=>'It didn’t take a global pandemic to know that the retail sector of the fashion industry was in trouble. Over the past few years we have all watched traditional retail stores fail, as more and more consumers started to spend more of  their time and money shopping online. No one seemed exempt from bankruptcy, both specialty and department stores alike. Barneys New York, Jeffrey’s, Neiman Marcus, J.C. Penney and Lord & Taylor have all declared bankruptcy. These closures not only affected retailers and their staff, but also hurt the pockets of many designers, especially smaller, independent designers, who were able to get their start from these stores. Even mega-retail chains have been struggling with declining in-store shoppers, astronomical rents, and debt. Unfortunately this trickle down effect results in cancelled orders and invoices that are left unpaid, a burden the brand must take on.',
                'user_id'=>1,
               'category_id'=> 2,
            ],
            [
                'title'=>'Classes Delve into Photography Ethics',
                'excerpt'=>'As digital photography radically democratizes the medium...',
                'slug'=>'classes-delve-into-photography-ethics',
                 'body'=>'As digital photography radically democratizes the medium, taking it out of the provenance of a once-elite group of imagemakers and gatekeepers, the subject of ethics in photography has come to the fore. Long overdue, we can finally begin to confront issues of bias, morality, and principle that have long infiltrated the medium by many of its most prominent practitioners.',
                 'user_id'=>1,
                'category_id'=> 1,
             ],
             [
                'title'=>'NEIGHBORHOOD GOODS',
                'excerpt'=>'There are a few new and exciting options surfacing for brands that value the exposure that..',
                'slug'=>'neighborhood-goods-smart-business-model',
                 'body'=>'Neighborhood Goods is an innovative alternative to the traditional department store model. The store provides brands with a low risk and less expensive way to test the waters of the physical retail model. Neighborhood Goods charges brands a small fee to display their designs in one or several of its physical locations (Austin and Plano, Texas and New York City), as well as on their e-commerce site where the retailer also takes a percentage of sales.',
                 'user_id'=>1,
                'category_id'=> 2,
             ],
             [
                'title'=>'FINDING RESILIENCE & POSSIBILITY WITH GUY RAZ',
                'excerpt'=>'Today’s episode is another doozy. Guy Raz is the creator and host of so many popular...',
                'slug'=>'what-he-has-learned-through-having-conversations',
                 'body'=>'Today’s episode is another doozy. Guy Raz is the creator and host of so many popular podcasts including How I Built This, Rewind, Wisdom from the Top, TED Radio Hour, and the children’s program Wow in the World. Or you may have heard him on the radio as the host of the breakout NPR Radio show, All Things Considered.A journalist by trade, Guy has received the Edward R. Murrow Award, the Daniel Schorr Journalism Prize, the National Headliner Award, and the NABJ Award, among many others.',
                 'user_id'=>1,
                'category_id'=> 1,
             ],
             [
                'title'=>'THE YES SHOP',
                'excerpt'=>'The Yes is the brainchild of fashion and tech veterans Taylor Tomasi-Hill (Street-style star and...',
                'slug'=>'the-yes-shopping-app',
                 'body'=>'The Yes is the brainchild of fashion and tech veterans Taylor Tomasi-Hill (Street-style star and Fashion Market Editor at Teen Vogue and W Magazine to name a few), Julie Bornstein (StitchFix, Nordstrom, Sephora) and Amit Aggarwal (Google, Bing, Groupon). The mobile shopping platform carries well established brands, as well as young designers ranging from Prada to Khaite.',
                 'user_id'=>1,
                'category_id'=> 2,
             ],
             [
                'title'=>'How To Photograph Stunning Autumn Color',
                'excerpt'=>'Five Essential Photography Tips for Autumn Color',
                'slug'=>'how-to-photograph-stunning-autumn-color',
                 'body'=>'Autumn color season is one of the most eagerly anticipated times of the year for restless nature photographers. The brilliant red, orange, and yellow foliage is like a jarring wake up call for all the creative energy atrophied by the listless and drab dog days of late summer (August through mid- September has always been my least favorite time of year). And since these photos aren’t going to just take themselves, here are 5 essential tips to help you make the most of the autumn color season.',
                 'user_id'=>1,
                'category_id'=> 1,
             ],
             [
                'title'=>'Shopify launches Shop, a new mobile app',
                'excerpt'=>'Shop is another mobile shopping site and describes itself as your personal...',
                'slug'=>'shopify-shopping-assistant',
                 'body'=>'Shop is another mobile shopping site and describes itself as your personal “shopping assistant.” The site was launched during the COVID-19 pandemic by Shopify, it’s a go-to tool for independent brands and retailers setting up e-commerce.',
                 'user_id'=>1,
                'category_id'=> 2,
             ],
             [
                'title'=>'Outer Banks Photography: The Battered Strand',
                'excerpt'=>'North Carolina’s Outer Banks is a land both infinitely brutal and beautiful',
                'slug'=>'outer-banks-photography-the-battered-strand',
                 'body'=>'North Carolina’s Outer Banks is a land both infinitely brutal and beautiful. For 125 miles, this narrow ribbon of barrier islands stretches from the Virginia state line south to Ocracoke Island, giving protection to the mainland from the raging Atlantic. In return for this natural amenity, the islands are the recipient of a safe harbor as well, by way of the establishment of the Cape Hatteras National Seashore, America’s first such designation.',
                 'user_id'=>1,
                'category_id'=> 1,
             ]
        ];
  
        foreach ($userData as $key => $val) {
            Post::create($val);
        }  
    }
}
