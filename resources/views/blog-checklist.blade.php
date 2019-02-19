{{--
Template Name: Blog Checklist
--}}

@extends('layouts.app')

@section('content')
  @php
  $checklist = [
    [
      "title" => "Create a starter headline",
      "duration" => "5",
      "desc" => "Write down at least one initial idea for what the title of the post will be. Knowing the headline before you start writing helps you stick to the topic and deliver what you promise in the title."
    ],
    [
      "title" => "Identify your audience",
      "duration" => "",
      "desc" => "Pinpoint exactly who you are writing the blog post for. When you know the exact audience of your content, it’s much easier to be direct with your writing. If you don’t know your audience, use our buyer persona template to start outlining your ideal reader."
    ],
    [
      "title" => "Know your purpose",
      "duration" => "",
      "desc" => "All digital content should be created with your marketing plan in mind. So one of the first things on your writing checklist should be to identify the top goal for your blog marketing content (e.g. build brand awareness, capture email subscribers, boost SEO, etc.)."
    ],
    [
      "title" => "Assign one primary keyword",
      "duration" => "",
      "desc" => "Use Alexa’s Keyword Difficulty Tool to identify the best keyword to use for the post. The keyword should accurately represent the topic and be a top keyword for your industry. It should be relatively popular and have a keyword difficulty that you can likely rank for."
    ],
    [
      "title" => "Use the primary keyword in the headline",
      "duration" => "",
      "desc" => "Go back to your headline and make sure the primary keyword is used in the title."
    ],
    [
      "title" => "Assign a few secondary keywords",
      "duration" => "5",
      "desc" => "A strong checklist for writing also includes a step to find related keywords to use in your post. Choose three or four secondary keywords that are related to the primary target keyword for the post."
    ],
    [
      "title" => "Write 300+ words",
      "duration" => "60",
      "desc" => "Write as much as you need to fully cover the topic, and as a best practice, write more than 300 words to show search engines that it is a thorough resource."
    ],
    [
      "title" => "Add value",
      "duration" => "",
      "desc" => "As you write your post, provide details, facts, stats, takeaways, news, and information that are valuable and helpful to the reader."
    ],
    [
      "title" => "Show, don’t tell",
      "duration" => "",
      "desc" => "An important part of this checklist for blog writing is using examples that help audiences deeply understand and absorb the message you are trying to share."
    ],
    [
      "title" => "Use the active voice",
      "duration" => "",
      "desc" => "Keep the post interesting by using an active voice. Avoid passive voice, which can make the content appear drab or dull."

    ],
    [
      "title" => "Write for an eighth-grade reading level",
      "duration" => "",
      "desc" => "While the quality of the writing should be high, keep it simple. Don’t use overly complex sentence structure or terminology that may lose readers."
    ],
    [
      "title" => "Don’t steal content",
      "duration" => "",
      "desc" => "The content you create should always be original and never copied from another website. Plagiarizing content from other sites can lead to search penalties."
    ],
    [
      "title" => "Provide proper sources",
      "duration" => "",
      "desc" => "If you use quotes or information from other sites in your blog post, provide proper citations by listing and linking to the source."
    ],
    [
      "title" => "Use subheadings",
      "duration" => "",
      "desc" => "Split up your content using subheadings throughout your post to break up sections of text."
    ],
    [
      "title" => "Use the primary keyword in at least one subheading",
      "duration" => "",
      "desc" => "A part of your blog writing checklist should include inserting the keyword in at least one subheading."
    ],
    [
      "title" => "Break up big paragraphs",
      "duration" => "",
      "desc" => "Digital content should be skimmable, so break up big blocks of text and paragraphs by adding paragraphs and white space."
    ],
    [
      "title" => "Highlight important information",
      "duration" => "",
      "desc" => "One of the most important content writing tips is using formatting features that make posts easier to skim. Bold, italicize, or otherwise highlight important information."
    ],
    [
      "title" => "Add supporting graphics",
      "duration" => "",
      "desc" => "Your blog content checklist should also include adding optimized images, videos, embedded social posts, etc., that make the post more engaging or interesting. Few examples: <a href='https://unsplash.com/' target='_blank' class='underline'>Unsplash</a>, <a href='https://pixabay.com/' target='_blank' class='underline'>Pixabay</a>, <a href='https://gratisography.com/' target='_blank' class='underline'>Gratisography</a>, <a href='https://www.dreamstime.com/' target='_blank' class='underline'>Dreams Time</a>"
    ],
    [
      "title" => "Ensure that images are the right size",
      "duration" => "",
      "desc" => "Images that are too large will slow down site load speeds, so don’t use photos with large file sizes."
    ],
    [
      "title" => "Add the primary keyword to the image alt tag",
      "duration" => "",
      "desc" => "Use the page’s target keyword in the image alt tag to improve the blog SEO."
    ],
    [
      "title" => "Use the primary keyword in the image file name and title",
      "duration" => "",
      "desc" => ". When adding images, also use the primary keyword in the original file name and the title in the CMS."
    ],
    [
      "title" => "Avoid image copyright infringement",
      "duration" => "",
      "desc" => "Double-check to ensure that you have the right to publish media to avoid copyright infringement with digital photos and videos."
    ],
    [
      "title" => "Use the primary keyword in the page title",
      "duration" => "",
      "desc" => "In your checklist for writing, start SEO optimization by writing a page title that includes the primary keyword. Make sure your page title is unique to avoid duplicate title tag issues that might hurt your site’s SEO. Usually, you can use the same page title as your headline."
    ],
    [
      "title" => "Use the primary keyword in the meta description",
      "duration" => "",
      "desc" => "Also, include the primary keyword in an original meta description that is no longer than 320 characters. For more tips, read our post on writing fully optimized SEO meta descriptions."
    ],
    [
      "title" => "Use the primary keyword in the first paragraph",
      "duration" => "",
      "desc" => "Another SEO copywriting tip is to include the primary keyword in the first paragraph of the copy to send signals to search crawlers."
    ],
    [
      "title" => "Use the primary keyword near the end of the copy",
      "duration" => "",
      "desc" => "Use the primary keyword toward the end of the post to bookend the copy with references to the target phrase."
    ],
    [
      "title" => "Use the primary keyword naturally in the copy",
      "duration" => "",
      "desc" => "Don’t engage in keyword stuffing. Use the term enough to create a 2% keyword density within your copy."
    ],
    [
      "title" => "Use each secondary keyword at least once in the copy",
      "duration" => "",
      "desc" => "Support the primary keyword by adding each related keyword at least once in the post."
    ],
    [
      "title" => "Add links to relevant internal pages",
      "duration" => "",
      "desc" => "At this point in the checklist for writing, add links to other published posts and pages on your site by adding relevant hyperlinks to other internal pages."
    ],
    [
      "title" => "Add links to other high-quality webpages",
      "duration" => "",
      "desc" => "Add relevant outbound, seo-friendly links to other high-quality websites to give credit and link to sources."
    ],
    [
      "title" => "Set outbound links to open a new page",
      "duration" => "",
      "desc" => "Review the outbound links on your page, and set them to open in a new window to keep readers on your site even if they click a link to another website."
    ],
    [
      "title" => "End with a call-to-action",
      "duration" => "",
      "desc" => "Because all good blog posts are written with a goal in mind, end with a call-to-action that tells the reader what you want them to do next."
    ],
    [
      "title" => "Write additional headlines",
      "duration" => "",
      "desc" => "Return to your headline and write a few more variations to come up with a more powerful title. Choose the best title out of your new options. Make sure it includes the primary keyword and is concise and compelling. Your final headline should stay under 60 characters in order to be fully displayed in search."
    ],
    [
      "title" => "Optimize for social sharing",
      "duration" => "",
      "desc" => "Encourage readers to spread your posts by creating shareable content that includes ClickToTweet links, callouts, and social sharing icons."
    ],
    [
      "title" => "Perform a final copy edit",
      "duration" => "",
      "desc" => "Use a self-editing checklist that helps you find spelling and grammar errors as well as typos. Don’t publish until the post is fully edited."
    ],
    [
      "title" => "Check on-page SEO",
      "duration" => "",
      "desc" => "Once the post is published, make sure you don’t miss any SEO optimization steps by running it through Alexa’s On-Page SEO Checker."
    ],
    [
      "title" => "Create 2-3 “pinnable” images & add at least 1 to your post",
      "duration" => "",
      "desc" => "valuable reason for making 2-3 images is that you can circulate them on Pinterest without it looking like you’re “spamming”"
    ],
    [
      "title" => "Share it",
      "duration" => "",
      "desc" => "Sharing your post on Pinterest/twitter/Facebook/Google+/Instagram can generate traffic within minutes"
    ],
    [
      "title" => "Hook your reader in the first two lines",
      "duration" => "",
      "desc" => "Your first one to two lines should jump out at your readers, making them think, 'Yes! That's me!', or 'I totally agree!"
    ],
    [
      "title" => "Give away Freebies (ex:ebook)",
      "duration" => "",
      "desc" => "Give them something for free in exchange of a subscription of any kind: Facebook, twitter, Instagram, Newsletter, etc"
    ],
    [
      "title" => "Create an automatic Follow Up email",
      "duration" => "",
      "desc" => "Send them an email/message as soon as they signed up"
    ],
    [
      "title" => "Think about your categories and tags",
      "duration" => "",
      "desc" => "Try to put each post into only one category and 3-5 tags based around your keywords."
    ],
  ];
  @endphp
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @php $count = 0; @endphp
    <section class="avenir" id="admin">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-2 col-lg-2 b ttu">Activity</div>
        <div class="col-12 col-sm-6 col-md-1 col-lg-1 b ttu">Time</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 b ttu">
          Description
        </div>
      </div>

      <ol class="pa0">
        @foreach ($checklist as $key => $value)
          <li>
            <hr>
            <div class="row">
              <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
                <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
                <span class="task">{{ $value['title'] }}</span>
              </div>
              <div class="col-12 col-sm-2 col-md-1 col-lg-1">{{ $value['duration'] }}m @php($count += (int)$value['duration'])</div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                {!! $value['desc'] !!}
              </div>
            </div>
          </li>
        @endforeach
      </ol>

      <div class="bt mv3"></div>
      <div class="row">
        <div class="col-6 col-sm-8 col-md-8 col-lg-2 b">Total Time</div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-1 b">{{$count}} min</div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-9 b tr"><?= date('H:i', mktime(0,$count)); ?></div>
      </div>
    </section>
    <br>
    <h4>Sources:</h4>
    <a href="https://blog.alexa.com/checklist-for-writing/">Alexa</a> <br>
    <a href="https://coschedule.com/blog/blog-post-writing-checklist/" target="_blank">Coschedule</a>
  @endwhile
@endsection
