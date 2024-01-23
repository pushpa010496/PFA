<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|biocontinuum-platform-for-next-generation-bioprocessing
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index'])->name('mainhome');

Route::get('audiencebg',[FormController::class,'audiencebg'])->name('audiencebg');
// sitemap
Route::get('sitemap.xml', [SitemapController::class,'index']);
//Route::get('/','HomeController@index')->name('mainhome');
// Knowledge bank Routes
Route::group(['namespace'=>'knowledgebank'], function () {


	//advertise

	// Route::get('advertise-1',[FormController::class,'advertise')->name('advertise');

	//static routes
	Route::get('articles/zebra-hospital-vision-study-global',[ArticleController::class,'zebrahospital']);
	

	//Articles
	Route::get('articles',[ArticleController::class,'index'])->name('articles');
	Route::get('articles/{url}',[ArticleController::class,'show'])->name('articles.url');
	Route::get('articles/more/{offset}',[ArticleController::class,'more'])->name('articles.loadmore');



	//Interviews
	Route::get('interviews',[InterviewsController::class,'index'])->name('interviews');
	Route::get('interviews/{url}',[InterviewsController::class,'show'])->name('interviews.url');
	Route::get('interviews/more/{offset}',[InterviewsController::class,'more'])->name('articles.loadmore');

	//whitepapers
	Route::get('whitepapers',[WhitepapersController::class,'index'])->name('whitepapers');
	Route::get('whitepapers/{url}',[WhitepapersController::class,'show'])->name('whitepapers.url');
	Route::get('whitepapers/more/{offset}',[WhitepapersController::class,'more'])->name('whitepapers.loadmore');
	Route::get('whitepapersform/whitepapers/{url}',[WhitepapersController::class,'whitepapersDownload'])->name('whitepapersform.download');

	Route::post('whitepapersdownloadpage/{url}',[WhitepapersController::class,'whitepapersPost'])->name('whitepapersform.post');
	Route::get('whitepapersdwnlink/{id}',[WhitepapersController::class,'whitepapersdwnlink']);
	
	//TechnoTrend
	Route::get('technotrends',[TechnotrendsController::class,'index'])->name('technotrends');
	Route::get('technotrends/{url}',[TechnotrendsController::class,'show'])->name('technotrends.url');
	Route::get('technotrends/more/{offset}',[TechnotrendsController::class,'more'])->name('technotrends.loadmore');

	//researchinsights
	Route::get('researchinsights',[ResearchinsightsController::class,'index'])->name('researchinsights');
	Route::get('researchinsights/{url}',[ResearchinsightsController::class,'show'])->name('researchinsights.url');
	Route::get('researchinsights/more/{offset}',[ResearchinsightsController::class,'more'])->name('researchinsights.loadmore');

	//Case Studies
	Route::get('casestudies',[CasestudiesController::class,'index'])->name('casestudies');
	Route::get('casestudies/{url}',[CasestudiesController::class,'show'])->name('casestudies.url');
	Route::get('casestudies/more/{offset}',[CasestudiesController::class,'more'])->name('casestudies.loadmore');

	Route::get('casestudiesform/{url}',[CasestudiesController::class,'casestudiesDownload'])->name('casestudiesform.download');

	Route::post('casestudiedownloadpage/{url}',[CasestudiesController::class,'casestudiesPost'])->name('casestudiesform.post');
	Route::get('casestudiesdwnlink/{id}',[CasestudiesController::class,'casestudiesdwnlink']);	
	//Articles
	Route::get('bookshelf',[BookshelfController::class,'index'])->name('bookshelf');
	Route::get('bookshelf/{url}',[BookshelfController::class,'show'])->name('bookshelf.url');

	//Projects
	Route::get('projects',[ProjectsController::class,'index'])->name('projects');
	Route::get('projects/{url}',[ProjectsController::class,'show'])->name('projects.url');
	Route::get('projects/more/{offset}',[ProjectsController::class,'more'])->name('projects.loadmore');
	
	//Projects
	Route::get('pharma-reports',[IndustryreportsController::class,'index'])->name('pharma-reports');
	Route::get('pharma-reports/{url}',[IndustryreportsController::class,'show'])->name('pharma-reports.url');
	Route::get('pharma-reports/more/{offset}',[IndustryreportsController::class,'more'])->name('pharma-reports.loadmore');
});
// End Knowledge bank Routes
// Magazine Routes
Route::group(['namespace'=>'magazine'], function () {
	
	Route::get('magazine',[EbookController::class,'index'])->name('magazine.index');

	Route::get('welcome',[EbookController::class,'welcome'])->name('welcome');

	Route::post('welcome',[EbookController::class,'welcome'])->name('welcome.post');

	Route::get('archives',[EbookController::class,'archives'])->name('ebook.archives');

	Route::post('archives-magazine/{issue}',[EbookController::class,'ebookPost'])->name('ebook.post');
	
	Route::get('e-book',[EbookController::class,'ebook'])->name('ebook.ebook');

	Route::post('e-book',[EbookController::class,'ebook'])->name('ebook.post');

	Route::get('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe');

	Route::post('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe.post');

	Route::get('archives-magazine/{issue}',[EbookController::class,'archiveMagazine'])->name('ebook.archivesmagazine');

	Route::get('author-guidelines',[CmsController::class,'guidelines'])->name('guidelines');

	Route::get('authorguidelines-download',[CmsController::class,'guidelineDownload'])->name('guidelines.download');

	Route::post('authorguidelines-download',[MagazineController::class,'authorguidelinesPost'])->name('guidelines.post');

	Route::get('autherguidlinesdwnlink',[MagazineController::class,'autherguidlinesdwnlink']);	

	Route::get('advisory-board',[CmsController::class,'advisoryBoard'])->name('advisoryboard');

	Route::get('advisory-board/more/{offset}',[CmsController::class,'advisoryboardMore']);

	Route::get('testimonials',[CmsController::class,'testimonials'])->name('testimonials');

	Route::get('testimonials/more/{offset}',[CmsController::class,'testimonialsMore']);

	Route::get('forthcoming-issue',[CmsController::class,'forthcomingIssue'])->name('forthcoming');

	Route::get('terms-conditions',[CmsController::class,'termsConditions'])->name('termsconditions');

	Route::get('contactus',[CmsController::class,'contactUs'])->name('contactus');

	Route::get('aboutus',[CmsController::class,'aboutUs'])->name('aboutus');

	Route::get('print-ads', [CmsController::class,'printAds')->name('printads');

	Route::post('print-ads-success', [CmsController::class,'printAds')->name('printads.post');

	Route::get('print-ads-success', [CmsController::class,'printAds')->name('printads.success');

	Route::get('advertise', [CmsController::class,'advertise')->name('advertise');

	Route::post('advertise-success', [CmsController::class,'advertise')->name('advertise.post');

	Route::get('magazinemediapack/success',[CmsController::class,'mediapackdwnlink')->name('magazinemediapack');

	Route::get('advertise-success', [CmsController::class,'advertise')->name('advertise.success');

	Route::get('register',[CmsController::class,'register')->name('register');

	Route::get('latest-ebook',[EbookController::class,'latestIssue')->name('latestebook');


	Route::get('banner-advertisements', [CmsController::class,'bannerAdvertisement')->name('banner.advertisement');

	Route::post('banner-advertisements', [CmsController::class,'bannerAdvertisement')->name('banner.advertisement.post');
	Route::get('bannerdwnlink',[CmsController::class,'banerdwnlinks');	

	Route::get('e-mail-marketing', [CmsController::class,'emailMarketing')->name('emailMarketing');

	Route::post('e-mail-marketing', [CmsController::class,'emailMarketing')->name('emailMarketing.post');

	Route::get('e-newsletter-marketing', [CmsController::class,'newslettermarketing')->name('newslettermarketing');

	Route::post('print-ads', [CmsController::class,'newslettermarketing')->name('newslettermarketing.post');

	// Route::get('e-newsletter-marketing-download-form', [CmsController::class,'newslettermarketing');
	Route::get('e-newsletter-marketing-download-form', function(){
		return redirect('e-newsletter-marketing');
	});

	Route::post('print-ads-banner-success', [CmsController::class,'newslettermarketingDownloadForm')->name('newslettermarketingDownloadForm.post');


	Route::get('magazine-subscription', [CmsController::class,'magazineSubscription')->name('magazine.subscription');
	Route::get('magazine-subscription-success', [CmsController::class,'magazineSubscription')->name('magazine.subscription.success');
	Route::post('magazine-subscription-success', [CmsController::class,'magazineSubscription')->name('magazine.subscription.post');

	/*right side iframe banner*/

	Route::get('htmladv',[CmsController::class,'emirates')->name('emiratesbanner');
});
// End Magazine Routes
//Forms
Route::post('googlecaptha',[FormController::class,'checkgooglecaptha')->name("gogglecaptha");
	// Media Pack Routes
Route::get('mediapacks',[FormController::class,'mediapacks')->name('mediapacks');
Route::post('mediapacks',[FormController::class,'mediapacks')->name('mediapacks.post');
Route::get('mediapacks/success',[FormController::class,'mediapackDownload')->name('mediapacks.success');
Route::get('mediapackdwnlink',[FormController::class,'mediapackdwnlink');
// End Media Pack Routes
Route::get('e-newsletter-subscribe',[FormController::class,'eNewsletter')->name('enewsletter.subscribe');
Route::post('e-newsletter-subscribe',[FormController::class,'eNewsletter')->name('enewsletter.post');
Route::get('e-newsletter-subscribe/success',[FormController::class,'eNewsletter')->name('enewsletter.success');
Route::get('editorial-calendar',[FormController::class,'editorialCalendar')->name('editorialcalendar');
Route::post('editorial-calendar',[FormController::class,'editorialCalendar')->name('editorialcalendar.post');
Route::get('editorial-calendar/success',[FormController::class,'editorialCalendarSuccess')->name('editorialcalendar.success');
Route::get('editorialcalendardwnlink',[FormController::class,'editorialCalendardwnlink');
Route::get('registration',[FormController::class,'registration')->name('registration');
Route::post('registration',[FormController::class,'registration')->name('registration.post');
Route::get('registration/success',[FormController::class,'registration')->name('registration.success');
Route::get('post-event',[FormController::class,'postEvent')->name('postevent.subscribe');
Route::post('post-event',[FormController::class,'postEvent')->name('postevent.post');
Route::get('post-event/success',[FormController::class,'postEvent')->name('postevent.success');
// Advertise Routes
Route::group(['namespace'=>'advertise'], function () {
Route::get('print',[AdvertiseController::class,'print')->name('advertise.print');
Route::get('online',[AdvertiseController::class,'online')->name('advertise.online');
Route::get('target-market',[AdvertiseController::class,'targetMarket')->name('advertise.targetmarket');
Route::get('target-audience',[AdvertiseController::class,'targetAudience')->name('advertise.targetaudience');
Route::get('tech-specs',[AdvertiseController::class,'techSpecs')->name('advertise.techspecs');
Route::get('terms',[AdvertiseController::class,'terms')->name('advertise.terms');
Route::get('clients',[AdvertiseController::class,'clients')->name('advertise.clients');
Route::get('e-newsletter',[AdvertiseController::class,'eNewsletter')->name('enewsletter');
Route::get('enewsletter-archives',[AdvertiseController::class,'eNewsletterArchives')->name('enewsletter.archives');
Route::get('emailblast',[AdvertiseController::class,'emailblast')->name('emailblast');
Route::get('current-edm',[AdvertiseController::class,'currentEdm')->name('currentedm');
Route::get('emailblast-archives',[AdvertiseController::class,'emailblastarchives')->name('emailblastarchives');
});

Route::get('/advertise-1',[AdvertiseController::class,'advertise1')->name('advertise1');
Route::post('/advertise-1-success', [AdvertiseController::class,'advertise1')->name('advertise1.post');
Route::get('/advertise-1-success', [AdvertiseController::class,'advertise1')->name('advertise1.success');
// End Advertise Routes

//bio-techne






//Industry Updates
Route::group(['namespace'=>'industryupdates'], function () {
	//pressreleases
	Route::get('pressreleases',[PressreleaseController::class,'index')->name('pressreleases');
	Route::get('pressreleases/{url}',[PressreleaseController::class,'show')->name('pressreleases.url');
	Route::get('pressreleases/more/{offset}',[PressreleaseController::class,'more')->name('pressreleases.loadmore');
	Route::get('listpressreleases/month/{month}/year/{year}',[PressreleaseController::class,'filter')->name('listpressreleases.filter');
	Route::get('listpressreleases/month/{month}/year/{year}/{offset}',[PressreleaseController::class,'listpressreleasesFilter')->name('listpressreleases.more');
	//news
	Route::get('news',[NewsController::class,'index')->name('news');
	Route::get('news/{url}',[NewsController::class,'show')->name('news.url');
	Route::get('news/more/{offset}',[NewsController::class,'more')->name('news.loadmore');
	Route::get('listnews/month/{month}/year/{year}',[NewsController::class,'filter')->name('listnews.filter');
	Route::get('listnews/month/{month}/year/{year}/{offset}',[NewsController::class,'listnewsFilter')->name('listnews.more');
	//Events
	Route::get('events',[EventController::class,'index')->name('events');
	Route::get('events/{url}',[EventController::class,'show')->name('events.url');
	Route::get('events/more/{offset}/{date}',[EventController::class,'more')->name('events.loadmore');
	Route::get('events/month/{month}/year/{year}',[EventController::class,'filter')->name('events.filter');
	Route::get('events/filtermore/{offset}/{month}/{year}/{date}',[EventController::class,'moreFilter')->name('events.moreFilter');	
	Route::get('reports',[ReportsController::class,'index')->name('reports');
	Route::get('reports/{url}',[ReportsController::class,'show')->name('reports.url');
	Route::get('reports/more/{offset}',[ReportsController::class,'more')->name('reports.loadmore');
});
//End industry Updates
//webinars
Route::get('webinars',[WebinarController::class,'index')->name('webinars');

Route::get('thermofisher-general-purpose-centrifuge',[WebinarController::class,'thermofisher');
Route::post('thermofisher-general-purpose-centrifuge-success',[WebinarController::class,'thermofisher')->name('ThermofisherGeneralPurposeCentrifuge.post');
Route::get('thermofisher-general-purpose-centrifuge-success',[WebinarController::class,'thermofisher')->name('ThermofisherGeneralPurposeCentrifuge.success');

//End webinars

Route::get('editorialsection',[EditorialController::class,'editorialIndex');
Route::get('knowledgebank',[EditorialController::class,'knowledgebankIndex');
Route::get('industryupdates',[EditorialController::class,'industryupdatesIndex');
Route::get('strategy',[EditorialController::class,'strategy');
Route::get('strategy/{slug}',[EditorialController::class,'strategyview')->name('strategy.slug');
Route::get('editorialloadmore/{slug}/{offset}',[EditorialController::class,'more');
Route::get('research-development',[EditorialController::class,'researchdevelopment');
Route::get('research-development/{slug}',[EditorialController::class,'researchdevelopmentsview')->name('research-development.slug');
Route::get('clinical-trials',[EditorialController::class,'clinicalTrials');
Route::get('clinical-trials/{slug}',[EditorialController::class,'clinicalTrialsview')->name('clinical-trials.slug');
Route::get('manufacturing',[EditorialController::class,'manufacturing');
Route::get('manufacturing/{slug}',[EditorialController::class,'manufacturingview')->name('manufacturing.slug');
Route::get('information-technology',[EditorialController::class,'information');
Route::get('information-technology/{slug}',[EditorialController::class,'informationview')->name('information-technology.slug');
Route::get('expert-talk',[EditorialController::class,'expertTalk');
Route::get('expert-talk/{slug}',[EditorialController::class,'expertTalkview')->name('expert-talk.slug');
Route::get('advertorials',[EditorialController::class,'advertorials');
Route::get('advertorials/{slug}',[EditorialController::class,'advertorialsview')->name('advertorials.slug');
Route::get('foreword',[EditorialController::class,'foreword');
Route::get('foreword/{slug}',[EditorialController::class,'forewordview')->name('foreword.slug');
Route::get('industryreports',[EditorialController::class,'industryreportsIndex');	
Route::get('search',function(){
	return redirect('/');
});
// Route::get('/search', [SearchController::class,'index');
Route::post('/search', [SearchController::class,'search')->name('search');
/* Xml Parsing */
Route::resource('newswires','NewswireController');
Route::get('newswires/{news_url}','NewswireController@show')->name('newswires.url');
Route::get('viewnewswires/month/{month}/year/{year}','NewswireController@filter')->name('viewnewswires.filter');
Route::get('viewnewswires/month/{month}/year/{year}/{offset}','NewswireController@vienewswiresFilter')->name('viewnewswires.more');
Route::get('morenewswires/more/{offset}','NewswireController@more')->name('newswires.loadmore');
/* End Xml Parsing */
/* Webinars */ 
Route::get('webinar',[WebinarController::class,'webinar');
Route::post('webinar-success',[WebinarController::class,'webinar')->name('webinar.post');
Route::get('webinar-success',[WebinarController::class,'webinar')->name('webinar.success');
Route::get('westpharma-webinar',[WebinarController::class,'westpharmawebinar');
Route::post('westpharma-webinar-success',[WebinarController::class,'westpharmawebinar')->name('westpharmawebinar.post');
Route::get('westpharma-webinar-success',[WebinarController::class,'westpharmawebinar')->name('westpharmawebinar.success');
Route::get('suez-webinar',[WebinarController::class,'suezWebinar');
Route::post('suez-webinar-success',[WebinarController::class,'suezWebinar')->name('suezWebinar.post');
Route::get('suez-webinar-success',[WebinarController::class,'suezWebinar')->name('suezWebinar.success');
Route::get('agilent-webinar',[WebinarController::class,'agilentWebinar');
Route::post('agilent-webinar-success',[WebinarController::class,'agilentWebinar')->name('agilentWebinar.post');
Route::get('agilent-webinar-success',[WebinarController::class,'agilentWebinar')->name('agilentWebinar.success');
Route::get('suez-toc-webinar',[WebinarController::class,'suezTocWebinar');
Route::post('suez-toc-webinar-success',[WebinarController::class,'suezTocWebinar')->name('suezTocWebinar.post');
Route::get('suez-toc-webinar-success',[WebinarController::class,'suezTocWebinar')->name('suezTocWebinar.success');
Route::get('thermofisher-webinar',[WebinarController::class,'thermofisherWebinar');
Route::post('thermofisher-webinar-success',[WebinarController::class,'thermofisherWebinar')->name('thermofisherWebinar.post');
Route::get('thermofisher-webinar-success',[WebinarController::class,'thermofisherWebinar')->name('thermofisherWebinar.success');
Route::get('capsugel-lonza-webinar',[WebinarController::class,'capsugelLonza');
Route::post('capsugel-lonza-webinar-success',[WebinarController::class,'capsugelLonza')->name('capsugelLonza.post');
Route::get('capsugel-lonza-webinar-success',[WebinarController::class,'capsugelLonza')->name('capsugelLonza.success');
Route::get('suez-ozonia-ozone-systems-webinar',[WebinarController::class,'suezOzonia');
Route::post('suez-ozonia-ozone-systems-webinar-success',[WebinarController::class,'suezOzonia')->name('suezozonia.post');
Route::get('suez-ozonia-ozone-systems-webinar-success',[WebinarController::class,'suezOzonia')->name('suezozonia.success');
Route::get('oliver-healthcare-webinar',[WebinarController::class,'oliverHealthcare');
Route::post('oliver-healthcare-webinar-success',[WebinarController::class,'oliverHealthcare')->name('oliverhealthcare.post');
Route::get('oliver-healthcare-webinar-success',[WebinarController::class,'oliverHealthcare')->name('oliverhealthcare.success');
Route::get('catalent-webinar',[WebinarController::class,'catalentWebinar');
Route::post('catalent-webinar-success',[WebinarController::class,'catalentWebinar')->name('catalentwebinar.post');
Route::get('catalent-webinar-success',[WebinarController::class,'catalentWebinar')->name('catalentwebinar.success');
Route::get('by-your-side-for-a-healthier-world',[WebinarController::class,'byyourSidefor');
Route::post('by-your-side-for-a-healthier-world-success',[WebinarController::class,'byyourSidefor')->name('byyoursidefor.post');
Route::get('by-your-side-for-a-healthier-world-success',[WebinarController::class,'byyourSidefor')->name('byyoursidefor.success');
Route::get('oracle-webinar-series1-english',[WebinarController::class,'OracleWebinareng');
Route::post('oracle-webinar-series1-english-success',[WebinarController::class,'OracleWebinareng')->name('orclewebinareng.post');
Route::get('oracle-webinar-series1-english-success',[WebinarController::class,'OracleWebinareng')->name('orclewebinareng.success');
Route::get('oracle-webinar-series1-chinese',[WebinarController::class,'OracleWebinarch');
Route::post('oracle-webinar-series1-chinese-success',[WebinarController::class,'OracleWebinarch')->name('orclewebinarch.post');
Route::get('oracle-webinar-series1-chinese-success',[WebinarController::class,'OracleWebinarch')->name('orclewebinarch.success');
Route::get('oracle-webinar-series1-korean',[WebinarController::class,'OracleWebinarkr');
Route::post('oracle-webinar-series1-korean-success',[WebinarController::class,'OracleWebinarkr')->name('orclewebinarkr.post');
Route::get('oracle-webinar-series1-korean-success',[WebinarController::class,'OracleWebinarkr')->name('orclewebinarkr.success');
Route::get('oracle-webinar-series2-english',[WebinarController::class,'OracleWebinarsseceng');
Route::post('oracle-webinar-series2-english-success',[WebinarController::class,'OracleWebinarsseceng')->name('orclewebinarsseceng.post');
Route::get('oracle-webinar-series2-english-success',[WebinarController::class,'OracleWebinarsseceng')->name('orclewebinarsseceng.success');
Route::get('oracle-webinar-series2-chinese',[WebinarController::class,'OracleWebinarsSecch');
Route::post('oracle-webinar-series2-chinese-success',[WebinarController::class,'OracleWebinarsSecch')->name('orclewebinarssecch.post');
Route::get('oracle-webinar-series2-chinese-success',[WebinarController::class,'OracleWebinarsSecch')->name('orclewebinarssecch.success');
Route::get('oracle-webinar-series2-korean',[WebinarController::class,'OracleWebinarsSeckr');
Route::post('oracle-webinar-series2-korean-success',[WebinarController::class,'OracleWebinarsSeckr')->name('oraclewebinarsseckr.post');
Route::get('oracle-webinar-series2-korean-success',[WebinarController::class,'OracleWebinarsSeckr')->name('oraclewebinarsseckr.success');
Route::get('oracle-webinar-series3-english',[WebinarController::class,'OracleWebinarsThirdeng');
Route::post('oracle-webinar-series3-english-success',[WebinarController::class,'OracleWebinarsThirdeng')->name('orclewebinarsthirdeng.post');
Route::get('oracle-webinar-series3-english-success',[WebinarController::class,'OracleWebinarsThirdeng')->name('orclewebinarsthirdeng.success');
Route::get('oracle-webinar-series3-chinese',[WebinarController::class,'OracleWebinarsThirdch');
Route::post('oracle-webinar-series3-chinese-success',[WebinarController::class,'OracleWebinarsThirdch')->name('orclewebinarsthirdch.post');
Route::get('oracle-webinar-series3-chinese-success',[WebinarController::class,'OracleWebinarsThirdch')->name('orclewebinarsthirdch.success');
Route::get('oracle-webinar-series3-korean',[WebinarController::class,'OracleWebinarsThirdkr');
Route::post('oracle-webinar-series3-korean-success',[WebinarController::class,'OracleWebinarsThirdkr')->name('oraclewebinarsthirdkr.post');
Route::get('oracle-webinar-series3-korean-success',[WebinarController::class,'OracleWebinarsThirdkr')->name('oraclewebinarsthirdkr.success');
Route::get('luina-bio-webinar',[WebinarController::class,'luinabioWebinar');
Route::post('luina-bio-webinar-success',[WebinarController::class,'luinabioWebinar')->name('luinabiowebinar.post');
Route::get('luina-bio-webinar-success',[WebinarController::class,'luinabioWebinar')->name('luinabiowebinar.success');
Route::get('pall-biotech-webinar-aug20',[WebinarController::class,'pallBiotech');
Route::post('pall-biotech-webinar-aug20-success',[WebinarController::class,'pallBiotech')->name('pallbiotech.post');
Route::get('pall-biotech-webinar-aug20-success',[WebinarController::class,'pallBiotech')->name('pallbiotech.success');
Route::get('eppendorf-bioprocess-webinar',[WebinarController::class,'eppendorfBioprocess');
Route::post('eppendorf-bioprocess-webinar-success',[WebinarController::class,'eppendorfBioprocess')->name('eppendorfbioprocess.post');
Route::get('eppendorf-bioprocess-webinar-success',[WebinarController::class,'eppendorfBioprocess')->name('eppendorfbioprocess.success');
Route::get('suez-sievers-webinar',[WebinarController::class,'suezSievers');
Route::post('suez-sievers-webinar-success',[WebinarController::class,'suezSievers')->name('suezsievers.post');
Route::get('suez-sievers-webinar-success',[WebinarController::class,'suezSievers')->name('suezsievers.success');
Route::get('prmaconsulting-webinar',[WebinarController::class,'prmaConsulting');
Route::post('prmaconsulting-webinar-success',[WebinarController::class,'prmaConsulting')->name('prmaconsulting.post');
Route::get('prmaconsulting-webinar-success',[WebinarController::class,'prmaConsulting')->name('prmaconsulting.success');
Route::get('cytiva-webinar',[WebinarController::class,'cytivaWebinar');
Route::post('cytiva-webinar-success',[WebinarController::class,'cytivaWebinar')->name('cytivawebinar.post');
Route::get('cytiva-webinar-success',[WebinarController::class,'cytivaWebinar')->name('cytivawebinar.success');
Route::get('oracle-webinar-series3-1-english',[WebinarController::class,'OracleWebinarsThirdengone');
Route::post('oracle-webinar-series3-1-english-success',[WebinarController::class,'OracleWebinarsThirdengone')->name('orclewebinarsthirdengone.post');
Route::get('oracle-webinar-series3-1-english-success',[WebinarController::class,'OracleWebinarsThirdengone')->name('orclewebinarsthirdengone.success');
Route::get('prmaconsulting-edm3-webinar',[WebinarController::class,'prmaconsultingEdm3');
Route::post('prmaconsulting-edm3-webinar-success',[WebinarController::class,'prmaconsultingEdm3')->name('prmaconsultingedm3.post');
Route::get('prmaconsulting-edm3-webinar-success',[WebinarController::class,'prmaconsultingEdm3')->name('prmaconsultingedm3.success');
Route::get('our-info',function(){
	return view('info');
});
Route::get('magazine-subscribe',[FormController::class,'magazineSubscribe');
Route::get('subscribe',[FormController::class,'magazineSubscribe')->name('subscribe');
Route::post('magazine-subscribe-post',[FormController::class,'magazineSubscribepost'); 
Route::get('subscribe/success',[FormController::class,'magazineSubscribe')->name('magazinesubscribe.success');
Route::get('cmp-mediapack',[FormController::class,'cmpmediapacks')->name('cmpmediapacks');
Route::post('cmpmediapacks',[FormController::class,'cmpmediapacks')->name('cmpmediapacks.post');
Route::get('cmp-mediapack-success',[FormController::class,'cmpmediapacks')->name('cmpmediapacks.success');
Route::get('yokogawa-webinar',[WebinarController::class,'yokogawaWebinar');
Route::post('yokogawa-webinar-success',[WebinarController::class,'yokogawaWebinar')->name('yokogawaWebinar.post');
Route::get('yokogawa-webinar-success',[WebinarController::class,'yokogawaWebinar')->name('yokogawaWebinar.success');
Route::get('thermofisher-scientific-webinar',[WebinarController::class,'thermofisherscientificWebinar');
Route::post('thermofisher-scientific-webinar-success',[WebinarController::class,'thermofisherscientificWebinar')->name('thermofisherscientificWebinar.post');
Route::get('thermofisher-scientific-webinar-success',[WebinarController::class,'thermofisherscientificWebinar')->name('thermofisherscientificWebinar.success');
Route::get('webinars/prma-webinar',[WebinarController::class,'prmawebnar');
Route::post('webinars/prma-webinar-success',[WebinarController::class,'prmawebnar')->name('prmawebnar.post');
Route::get('webinars/prma-webinar-success',[WebinarController::class,'prmawebnar')->name('prmawebnar.success');
Route::get('world-courier-ondemand-webinar',[WebinarController::class,'worldCourierOndemandWebinar');
Route::post('world-courier-ondemand-webinar-success',[WebinarController::class,'worldCourierOndemandWebinar')->name('worldCourierOndemandWebinar.post');
Route::get('world-courier-ondemand-webinar-success',[WebinarController::class,'worldCourierOndemandWebinar')->name('worldCourierOndemandWebinar.success');
Route::get('eppendorf-cell-culture-webinar',[WebinarController::class,'eppendorfcellculturewebinar');
Route::post('eppendorf-cell-culture-webinar-success',[WebinarController::class,'eppendorfcellculturewebinar')->name('eppendorfcellculturewebinar.post');
Route::get('eppendorf-cell-culture-webinar-success',[WebinarController::class,'eppendorfcellculturewebinar')->name('eppendorfcellculturewebinar.success');
Route::get('psi-webinar',[WebinarController::class,'psiWebinar');
Route::post('psi-webinar-success',[WebinarController::class,'psiWebinar')->name('psiwebinar.post');
Route::get('psi-webinar-success',[WebinarController::class,'psiWebinar')->name('psiwebinar.success');
Route::get('medidata-webinar',[WebinarController::class,'medidataWebinar');
Route::post('medidata-webinar-success',[WebinarController::class,'medidataWebinar')->name('medidataWebinar.post');
Route::get('medidata-webinar-success',[WebinarController::class,'medidataWebinar')->name('medidataWebinar.success');
Route::get('protocol-first-webinar',[WebinarController::class,'protocolwebinar');
Route::post('protocol-first-webinar-success',[WebinarController::class,'protocolwebinar')->name('protocolwebinar.post');
Route::get('protocol-first-webinar-success',[WebinarController::class,'protocolwebinar')->name('protocolwebinar.success');
Route::get('obviohealth-webinar',[WebinarController::class,'obviohealthwebinar');
Route::post('obviohealth-webinar-success',[WebinarController::class,'obviohealthwebinar')->name('obviohealthwebinar.post');
Route::get('obviohealth-webinar-success',[WebinarController::class,'obviohealthwebinar')->name('obviohealthwebinar.success');
Route::get('solovpe-webinar',[WebinarController::class,'solovpeOndemandWebinar');
Route::post('solovpe-webinar-success',[WebinarController::class,'solovpeOndemandWebinar')->name('solovpeWebinar.post');
Route::get('solovpe-webinar-success',[WebinarController::class,'solovpeOndemandWebinar')->name('solovpeWebinar.success');
Route::get('ystral-webinar',[WebinarController::class,'ystralWebinar');
Route::post('ystral-webinar-success',[WebinarController::class,'ystralWebinar')->name('ystralWebinar.post');
Route::get('ystral-webinar-success',[WebinarController::class,'ystralWebinar')->name('ystralWebinar.success');
Route::get('repligen-webinar-korean',[WebinarController::class,'technologiesOndemandWebinar');
Route::post('repligen-webinar-korean-success',[WebinarController::class,'technologiesOndemandWebinar')->name('technologiesWebinar.post');
Route::get('repligen-webinar-korean-success',[WebinarController::class,'technologiesOndemandWebinar')->name('technologiesWebinar.success');
Route::get('repligen-flowvpx-en-webinar',[WebinarController::class,'repligenFlowvpxWebinar');
Route::post('repligen-flowvpx-en-webinar-success',[WebinarController::class,'repligenFlowvpxWebinar')->name('repligenFlowvpxWebinar.post');
Route::get('repligen-flowvpx-en-webinar-success',[WebinarController::class,'repligenFlowvpxWebinar')->name('repligenFlowvpxWebinar.success');
Route::get('how-is-digitalization-transforming-the-pharmaceutical-industry',[WebinarController::class,'digitalizationTransforming');
Route::post('how-is-digitalization-transforming-the-pharmaceutical-industry-success',[WebinarController::class,'digitalizationTransforming')->name('digitalizationtransforming.post');
Route::get('how-is-digitalization-transforming-the-pharmaceutical-industry-success',[WebinarController::class,'digitalizationTransforming')->name('digitalizationtransforming.success');
Route::get('oliver-healthcare-packaging-webinar',[WebinarController::class,'oliverHealthcarePackaging');
Route::post('oliver-healthcare-packaging-webinar-success',[WebinarController::class,'oliverHealthcarePackaging')->name('oliverhealthcarepackaging.post');
Route::get('oliver-healthcare-packaging-webinar-success',[WebinarController::class,'oliverHealthcarePackaging')->name('oliverhealthcarepackaging.success');
Route::get('yokogawa-webinar2021',[WebinarController::class,'yokogawaWebinar2021');
Route::post('yokogawa-webinar2021-success',[WebinarController::class,'yokogawaWebinar2021')->name('yokogawawebinar2021.post');
Route::get('yokogawa-webinar2021-success',[WebinarController::class,'yokogawaWebinar2021')->name('yokogawawebinar2021.success');
Route::get('satubli-robotics-webinar',[WebinarController::class,'satubliroboticsWebinar');
Route::post('satubli-robotics-webinar-success',[WebinarController::class,'satubliroboticsWebinar')->name('satubliroboticswebinar.post');
Route::get('satubli-robotics-webinar-success',[WebinarController::class,'satubliroboticsWebinar')->name('satubliroboticswebinar.success');
Route::get('caliber-technologies-webinar',[WebinarController::class,'calibertechnologiesWebinar');
Route::post('caliber-technologies-webinar-success',[WebinarController::class,'calibertechnologiesWebinar')->name('calibertechnologieswebinar.post');
Route::get('caliber-technologies-webinar-success',[WebinarController::class,'calibertechnologiesWebinar')->name('calibertechnologieswebinar.success');
Route::get('iktos-ai-webinar',[WebinarController::class,'iktosaiWebinar');
Route::post('iktos-ai-webinar-success',[WebinarController::class,'iktosaiWebinar')->name('iktosaiwebinar.post');
Route::get('iktos-ai-webinar-success',[WebinarController::class,'iktosaiWebinar')->name('iktosaiwebinar.success');
Route::get('korber-pharma-webinar',[WebinarController::class,'korberpharmaWebinar');
Route::post('korber-pharma-webinar-success',[WebinarController::class,'korberpharmaWebinar')->name('korberpharmawebinar.post');
Route::get('korber-pharma-webinar-success',[WebinarController::class,'korberpharmaWebinar')->name('korberpharmawebinar.success');
Route::get('catridges-for-delivery-devices-ondemand-webinar',[WebinarController::class,'deliveryDevicesOndemandWebinar');
Route::post('catridges-for-delivery-devices-ondemand-webinar-success',[WebinarController::class,'deliveryDevicesOndemandWebinar')->name('deliveryDevicesOndemandWebinar.post');
Route::get('catridges-for-delivery-devices-ondemand-webinar-success',[WebinarController::class,'deliveryDevicesOndemandWebinar')->name('deliveryDevicesOndemandWebinar.success');
Route::get('pandemic-preparedness-ondemand-webinar',[WebinarController::class,'preparednessOndemandWebinar');
Route::post('pandemic-preparedness-ondemand-webinar-success',[WebinarController::class,'preparednessOndemandWebinar')->name('preparednessOndemandWebinar.post');
Route::get('pandemic-preparedness-ondemand-webinar-success',[WebinarController::class,'preparednessOndemandWebinar')->name('preparednessOndemandWebinar.success');
Route::get('film-lamination-and-coatings-webinar',[WebinarController::class,'filmaminationCoatingsWebinar');
Route::post('film-lamination-and-coatings-webinar-success',[WebinarController::class,'filmaminationCoatingsWebinar')->name('filmaminationCoatingsWebinar.post');
Route::get('film-lamination-and-coatings-webinar-success',[WebinarController::class,'filmaminationCoatingsWebinar')->name('filmaminationCoatingsWebinar.success');
Route::get('veeva-opendata-ondemand-webinar',[WebinarController::class,'veevaOpendataOndemandWebinar');
Route::post('veeva-opendata-ondemand-webinar-success',[WebinarController::class,'veevaOpendataOndemandWebinar')->name('veevaOpendataOndemandWebinar.post');
Route::get('veeva-opendata-ondemand-webinar-success',[WebinarController::class,'veevaOpendataOndemandWebinar')->name('veevaOpendataOndemandWebinar.success');
Route::get('sartorius-car-t-webinar',[WebinarController::class,'sartoriusCartWebinar');
Route::post('sartorius-car-t-webinar-success',[WebinarController::class,'sartoriusCartWebinar')->name('sartoriusCartWebinar.post');
Route::get('sartorius-car-t-webinar-success',[WebinarController::class,'sartoriusCartWebinar')->name('sartoriusCartWebinar.success');
Route::get('thermofisher-lab-safety-practices-2021',[WebinarController::class,'thermofisherlabsafetypractices');
Route::post('thermofisher-lab-safety-practices-2021-success',[WebinarController::class,'thermofisherlabsafetypractices')->name('thermofisherlabsafetypractices.post');
Route::get('thermofisher-lab-safety-practices-2021-success',[WebinarController::class,'thermofisherlabsafetypractices')->name('thermofisherlabsafetypractices.success');
Route::get('variable-pathlength-technology-for-oligonucleotide-drug-products',[WebinarController::class,'variablePathlengthTechnology');
Route::post('variable-pathlength-technology-for-oligonucleotide-drug-products-success',[WebinarController::class,'variablePathlengthTechnology')->name('variablePathlengthTechnology.post');
Route::get('variable-pathlength-technology-for-oligonucleotide-drug-products-success',[WebinarController::class,'variablePathlengthTechnology')->name('variablePathlengthTechnology.success');
Route::get('repligens-variable-pathlength-technology-for-oligonucleotide-drug-products',[WebinarController::class,'repligensvariablePathlengthTechnology');
Route::post('repligens-variable-pathlength-technology-for-oligonucleotide-drug-products-success',[WebinarController::class,'repligensvariablePathlengthTechnology')->name('repligensvariablePathlengthTechnology.post');
Route::get('repligens-variable-pathlength-technology-for-oligonucleotide-drug-products-success',[WebinarController::class,'repligensvariablePathlengthTechnology')->name('repligensvariablePathlengthTechnology.success');
Route::get('bispecific-antibody-develoment',[WebinarController::class,'bispecificAntibodyDeveloment');
Route::post('bispecific-antibody-develoment-success',[WebinarController::class,'bispecificAntibodyDeveloment')->name('bispecificAntibodyDeveloment.post');
Route::get('bispecific-antibody-develoment-success',[WebinarController::class,'bispecificAntibodyDeveloment')->name('bispecificAntibodyDeveloment.success');

Route::get('bc-platforms-presentation',[WebinarController::class,'bcPlatformsPresentation');
Route::post('bc-platforms-presentation-success',[WebinarController::class,'bcPlatformsPresentation')->name('bcPlatformsPresentation.post');
Route::get('bc-platforms-presentation-success',[WebinarController::class,'bcPlatformsPresentation')->name('bcPlatformsPresentation.success');


Route::get('how-manufacturing-software-enabling-pharma-companies-accelerate-development-production',[WebinarController::class,'howManufacturingSoftwareEnabling');
Route::post('how-manufacturing-software-enabling-pharma-companies-accelerate-development-production-success',[WebinarController::class,'howManufacturingSoftwareEnabling')->name('howManufacturingSoftwareEnabling.post');
Route::get('how-manufacturing-software-enabling-pharma-companies-accelerate-development-production-success',[WebinarController::class,'howManufacturingSoftwareEnabling')->name('howManufacturingSoftwareEnabling.success');

Route::get('is-your-electronic-production-record-incomplete',[WebinarController::class,'isYourElectronicProductionRecordIncomplete');
Route::post('is-your-electronic-production-record-incomplete-success',[WebinarController::class,'isYourElectronicProductionRecordIncomplete')->name('isYourElectronicProductionRecordIncomplete.post');
Route::get('is-your-electronic-production-record-incomplete-success',[WebinarController::class,'isYourElectronicProductionRecordIncomplete')->name('isYourElectronicProductionRecordIncomplete.success');

Route::get('veeva-webinar',[WebinarController::class,'veevaWebinar');
Route::post('veeva-webinar-success',[WebinarController::class,'veevaWebinar')->name('veevaWebinar.post');
Route::get('veeva-webinar-success',[WebinarController::class,'veevaWebinar')->name('veevaWebinar.success');

Route::get('clarivate-pharmavision-2022',[WebinarController::class,'clarivatePharmavision2022');
Route::post('clarivate-pharmavision-2022-success',[WebinarController::class,'clarivatePharmavision2022')->name('clarivatePharmavision2022.post');
Route::get('clarivate-pharmavision-2022-success',[WebinarController::class,'clarivatePharmavision2022')->name('clarivatePharmavision2022.success');


// Promotions Routes

Route::prefix('promotion')->group(function () {
    
Route::get('/horizon-chosource-cho1-adcc',[FlatPagesController::class,'horizonChosourceCho1Adcc');
Route::post('/horizon-chosource-cho1-adcc-success',[FlatPagesController::class,'horizonChosourceCho1Adcc')->name('horizonChosourceCho1Adcc.post');
Route::get('/horizon-chosource-cho1-adcc-success',[FlatPagesController::class,'horizonChosourceCho1Adcc')->name('horizonChosourceCho1Adcc.success');


Route::get('/borapharma-whitepaper-formulatons',[FlatPagesController::class,'borapharmaWhitepaper');
Route::post('/borapharma-whitepaper-formulatons-success',[FlatPagesController::class,'borapharmaWhitepaper')->name('borapharmaWhitepaper.post');
Route::get('/borapharma-whitepaper-formulatons-success',[FlatPagesController::class,'borapharmaWhitepaper')->name('borapharmaWhitepaper.success');

Route::get('/oracle-embrace-virtual-trials',[FlatPagesController::class,'oracleEmbraceVirtualTrials');
Route::post('/oracle-embrace-virtual-trials-success',[FlatPagesController::class,'oracleEmbraceVirtualTrials')->name('oracleEmbraceVirtualTrials.post');
Route::get('/oracle-embrace-virtual-trials-success',[FlatPagesController::class,'oracleEmbraceVirtualTrials')->name('oracleEmbraceVirtualTrials.success');

Route::get('/safely-accelerating-drug-development-for-brighter-outcomes',[FlatPagesController::class,'safelyAcceleratingDrugDevelopmentForBrighterOutcomes');
Route::post('/safely-accelerating-drug-development-for-brighter-outcomes-success',[FlatPagesController::class,'safelyAcceleratingDrugDevelopmentForBrighterOutcomes')->name('safelyAcceleratingDrugDevelopmentForBrighterOutcomes.post');
Route::get('/safely-accelerating-drug-development-for-brighter-outcomes-success',[FlatPagesController::class,'safelyAcceleratingDrugDevelopmentForBrighterOutcomes')->name('safelyAcceleratingDrugDevelopmentForBrighterOutcomes.success');

Route::get('/oracle-edc-keptup',[FlatPagesController::class,'oracleEdcKeptup');
Route::post('/oracle-edc-keptup-success',[FlatPagesController::class,'oracleEdcKeptup')->name('oracleEdcKeptup.post');
Route::get('/oracle-edc-keptup-success',[FlatPagesController::class,'oracleEdcKeptup')->name('oracleEdcKeptup.success');

Route::get('/oracle-explore-clinicaltrial',[FlatPagesController::class,'oracleExploreClinicaltrial');
Route::post('/oracle-explore-clinicaltrial-success',[FlatPagesController::class,'oracleExploreClinicaltrial')->name('oracleExploreClinicaltrial.post');
Route::get('/oracle-explore-clinicaltrial-success',[FlatPagesController::class,'oracleExploreClinicaltrial')->name('oracleExploreClinicaltrial.success');

Route::get('/pharma-focus-asia-lab-channel-2021',[FlatPagesController::class,'eppendorfLabchannel');
Route::post('/pharma-focus-asia-lab-channel-2021-success',[FlatPagesController::class,'eppendorfLabchannel')->name('eppendorfLabchannel.post');
Route::get('/pharma-focus-asia-lab-channel-2021-success',[FlatPagesController::class,'eppendorfLabchannel')->name('eppendorfLabchannel.success');

Route::get('/pharma-focus-asia-lab-channel-2021',[FlatPagesController::class,'eppendorfLabchannel');
Route::post('/pharma-focus-asia-lab-channel-2021-success',[FlatPagesController::class,'eppendorfLabchannel')->name('eppendorfLabchannel.post');
Route::get('/pharma-focus-asia-lab-channel-2021-success',[FlatPagesController::class,'eppendorfLabchannel')->name('eppendorfLabchannel.success');



Route::get('/lesson-learned-from-successful-remediation-project',[FlatPagesController::class,'nsfRemediationproject');
Route::post('/lesson-learned-from-successful-remediation-project-success',[FlatPagesController::class,'nsfRemediationproject')->name('nsfRemediationproject.post');
Route::get('/lesson-learned-from-successful-remediation-project-success',[FlatPagesController::class,'nsfRemediationproject')->name('nsfRemediationproject.success');

Route::get('/oracle-edc-keptup-korean',[FlatPagesController::class,'oracleEdcKeptupKorean');
Route::post('/oracle-edc-keptup-korean-success',[FlatPagesController::class,'oracleEdcKeptupKorean')->name('oracleEdcKeptupKorean.post');
Route::get('/oracle-edc-keptup-korean-success',[FlatPagesController::class,'oracleEdcKeptupKorean')->name('oracleEdcKeptupKorean.success');

Route::get('/oracle-embrace-virtual-trials-korean',[FlatPagesController::class,'oracleEmbraceVirtualTrialsKorean');
Route::post('/oracle-embrace-virtual-trials-korean-success',[FlatPagesController::class,'oracleEmbraceVirtualTrialsKorean')->name('oracleEmbraceVirtualTrialsKorean.post');
Route::get('/oracle-embrace-virtual-trials-korean-success',[FlatPagesController::class,'oracleEmbraceVirtualTrialsKorean')->name('oracleEmbraceVirtualTrialsKorean.success');

Route::get('/oracle-explore-clinicaltrial-korean',[FlatPagesController::class,'oracleExploreClinicaltrialKorean');
Route::post('/oracle-explore-clinicaltrial-korean-success',[FlatPagesController::class,'oracleExploreClinicaltrialKorean')->name('oracleExploreClinicaltrialKorean.post');
Route::get('/oracle-explore-clinicaltrial-korean-success',[FlatPagesController::class,'oracleExploreClinicaltrialKorean')->name('oracleExploreClinicaltrialKorean.success');

Route::get('/horizon-chosource-expression-platrform',[FlatPagesController::class,'horizonChosourceExpressionPlatrform');
Route::post('/horizon-chosource-expression-platrform-success',[FlatPagesController::class,'horizonChosourceExpressionPlatrform')->name('horizonChosourceExpressionPlatrform.post');
Route::get('/horizon-chosource-expression-platrform-success',[FlatPagesController::class,'horizonChosourceExpressionPlatrform')->name('horizonChosourceExpressionPlatrform.success');

Route::get('/euivdregulation2017-746',[FlatPagesController::class,'euiVdrRegulation2017');
Route::post('/euivdregulation2017-746-success',[FlatPagesController::class,'euiVdrRegulation2017')->name('euiVdrRegulation2017.post');
Route::get('/euivdregulation2017-746-success',[FlatPagesController::class,'euiVdrRegulation2017')->name('euiVdrRegulation2017.success');

Route::get('/transfer-strategies-for-pharmaceutical-product',[FlatPagesController::class,'transferStrategies');
Route::post('/transfer-strategies-for-pharmaceutical-product-success',[FlatPagesController::class,'transferStrategies')->name('transferStrategies.post');
Route::get('/transfer-strategies-for-pharmaceutical-product-success',[FlatPagesController::class,'transferStrategies')->name('transferStrategies.success');

Route::get('/ystral-jetstream-mixer-versus-agitator-webinar',[FlatPagesController::class,'ystralJetstreamAgitator');
Route::post('/ystral-jetstream-mixer-versus-agitator-webinar-success',[FlatPagesController::class,'ystralJetstreamAgitator')->name('ystralJetstreamAgitator.post');
Route::get('/ystral-jetstream-mixer-versus-agitator-webinar-success',[FlatPagesController::class,'ystralJetstreamAgitator')->name('ystralJetstreamAgitator.success');

Route::get('/horizon-chosource-cho1-adcc-cell-line',[FlatPagesController::class,'horizonChosourceCho1AdccCellLine');
Route::post('/horizon-chosource-cho1-adcc-cell-line-success',[FlatPagesController::class,'horizonChosourceCho1AdccCellLine')->name('horizonChosourceCho1AdccCellLine.post');
Route::get('/horizon-chosource-cho1-adcc-cell-line-success',[FlatPagesController::class,'horizonChosourceCho1AdccCellLine')->name('horizonChosourceCho1AdccCellLine.success');

Route::get('/how-to-select-the-right-filter-integrity-test-instrument',[FlatPagesController::class,'rightFilterIntegrity');
Route::post('/how-to-select-the-right-filter-integrity-test-instrument-success',[FlatPagesController::class,'rightFilterIntegrity')->name('rightFilterIntegrity.post');
Route::get('/how-to-select-the-right-filter-integrity-test-instrument-success',[FlatPagesController::class,'rightFilterIntegrity')->name('rightFilterIntegrity.success');

Route::get('/on-site-gmp-regulatory-inspection',[FlatPagesController::class,'nsfGMPregulatory');
Route::post('/on-site-gmp-regulatory-inspection-success',[FlatPagesController::class,'nsfGMPregulatory')->name('nsfGMPregulatory.post');
Route::get('/on-site-gmp-regulatory-inspection-2021-success',[FlatPagesController::class,'nsfGMPregulatory')->name('nsfGMPregulatory.success');

Route::get('/nsf-fda-inspections-recommencing',[FlatPagesController::class,'nsfFdaInspectionsRecommencing');
Route::post('/nsf-fda-inspections-recommencing-success',[FlatPagesController::class,'nsfFdaInspectionsRecommencing')->name('nsfFdaInspectionsRecommencing.post');
Route::get('/nsf-fda-inspections-recommencing-success',[FlatPagesController::class,'nsfFdaInspectionsRecommencing')->name('nsfFdaInspectionsRecommencing.success');

Route::get('/waters-genotoxic-impurities-webinar',[FlatPagesController::class,'watersGenotoxicImpuritiesWebinar');
Route::post('/waters-genotoxic-impurities-webinar-success',[FlatPagesController::class,'watersGenotoxicImpuritiesWebinar')->name('watersGenotoxicImpuritiesWebinar.post');
Route::get('/waters-genotoxic-impurities-webinar-success',[FlatPagesController::class,'watersGenotoxicImpuritiesWebinar')->name('watersGenotoxicImpuritiesWebinar.success');

Route::get('/accelerating-mrna-research-and-manufacturing',[FlatPagesController::class,'acceleratingMrna');
Route::post('/accelerating-mrna-research-and-manufacturing-success',[FlatPagesController::class,'acceleratingMrna')->name('acceleratingMrna.post');
Route::get('/accelerating-mrna-research-and-manufacturing-success',[FlatPagesController::class,'acceleratingMrna')->name('acceleratingMrna.success');

Route::get('/thermo-fisher-scientific',[FlatPagesController::class,'thermoFisherScientific');
Route::post('/thermo-fisher-scientific-success',[FlatPagesController::class,'thermoFisherScientific')->name('thermoFisherScientific.post');
Route::get('/thermo-fisher-scientific-success',[FlatPagesController::class,'thermoFisherScientific')->name('thermoFisherScientific.success');

Route::get('/biocontinuum-platform-for-next-generation-bioprocessing',[FlatPagesController::class,'biocontinuumPlatform')->name('biocontinuum-platform');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing-success',[FlatPagesController::class,'biocontinuumPlatform')->name('biocontinuumPlatform.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing-success',[FlatPagesController::class,'biocontinuumPlatform')->name('biocontinuumPlatform.success');


Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/explore-biocontinuum-platform',[FlatPagesController::class,'biocontinuumPlatformExploreBiocontinuum')->name('explore-biocontinuum');

Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/continuous-processing-market-trends-drivers',[FlatPagesController::class,'biocontinuumPlatformContinuousProcessing')->name('continuous-processing');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/continuous-processing-market-trends-drivers-success',[FlatPagesController::class,'biocontinuumPlatformContinuousProcessing')->name('ContinuousProcessing.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/continuous-processing-market-trends-drivers-success',[FlatPagesController::class,'biocontinuumPlatformContinuousProcessing')->name('ContinuousProcessing.success');


Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess',[FlatPagesController::class,'biocontinuumPlatformAdvanceDigitize')->name('advance-digitize');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess-success',[FlatPagesController::class,'biocontinuumPlatformAdvanceDigitize')->name('biocontinuumPlatformAdvanceDigitize.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess-success',[FlatPagesController::class,'biocontinuumPlatformAdvanceDigitize')->name('biocontinuumPlatformAdvanceDigitize.success');

Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/contact-us',[FlatPagesController::class,'biocontinuumPlatformContactUs')->name('contact-us');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/contact-us-success',[FlatPagesController::class,'biocontinuumPlatformContactUs')->name('biocontinuumPlatformContactUs.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/contact-us-success',[FlatPagesController::class,'biocontinuumPlatformContactUs')->name('biocontinuumPlatformContactUs.success');

Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/automation-analytics',[FlatPagesController::class,'biocontinuumPlatformAutomationAnalytics')->name('automation-analytics');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/automation-analytics-success',[FlatPagesController::class,'biocontinuumPlatformAutomationAnalytics')->name('biocontinuumPlatformAutomationAnalytics.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/automation-analytics-success',[FlatPagesController::class,'biocontinuumPlatformAutomationAnalytics')->name('biocontinuumPlatformAutomationAnalytics.success');


Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/process-analytical-technology',[FlatPagesController::class,'biocontinuumPlatformProcessAnalytical')->name('process-analytical');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/process-analytical-technology-success',[FlatPagesController::class,'biocontinuumPlatformProcessAnalytical')->name('biocontinuumPlatformProcessAnalytical.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/process-analytical-technology-success',[FlatPagesController::class,'biocontinuumPlatformProcessAnalytical')->name('biocontinuumPlatformProcessAnalytical.success');


Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/seed-train',[FlatPagesController::class,'biocontinuumPlatformSeedTrain')->name('seed-train');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/seed-train-success',[FlatPagesController::class,'biocontinuumPlatformSeedTrain')->name('biocontinuumPlatformSeedTrain.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/seed-train-success',[FlatPagesController::class,'biocontinuumPlatformSeedTrain')->name('biocontinuumPlatformSeedTrain.success');



Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/virus-inactivation',[FlatPagesController::class,'biocontinuumPlatformVirusInactivation')->name('virus-inactivation');
Route::post('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/virus-inactivation-success',[FlatPagesController::class,'biocontinuumPlatformVirusInactivation')->name('biocontinuumPlatformVirusInactivation.post');
Route::get('/biocontinuum-platform-for-next-generation-bioprocessing/advance-digitize-your-bioprocess/virus-inactivation-success',[FlatPagesController::class,'biocontinuumPlatformVirusInactivation')->name('biocontinuumPlatformVirusInactivation.success');



Route::get('/twist-bioscience-webinar',[FlatPagesController::class,'twistBioscienceWebinar');
Route::post('/twist-bioscience-webinar-success',[FlatPagesController::class,'twistBioscienceWebinar')->name('twistBioscienceWebinar.post');
Route::get('/twist-bioscience-webinar-success',[FlatPagesController::class,'twistBioscienceWebinar')->name('twistBioscienceWebinar.success');

Route::get('/Advance-oligonucleotide-therapeutics',[FlatPagesController::class,'AdvanceOligonucleotideTherapeutics');
Route::post('/Advance-oligonucleotide-therapeutics-success',[FlatPagesController::class,'AdvanceOligonucleotideTherapeutics')->name('AdvanceOligonucleotideTherapeutics.post');
Route::get('/Advance-oligonucleotide-therapeutics-success',[FlatPagesController::class,'AdvanceOligonucleotideTherapeutics')->name('AdvanceOligonucleotideTherapeutics.success');

Route::get('/Adaptdose-an-innovative-platform',[FlatPagesController::class,'AdaptdoseAnInnovativePlatform');
Route::post('/Adaptdose-an-innovative-platform-success',[FlatPagesController::class,'AdaptdoseAnInnovativePlatform')->name('AdaptdoseAnInnovativePlatform.post');
Route::get('/Adaptdose-an-innovative-platform-success',[FlatPagesController::class,'AdaptdoseAnInnovativePlatform')->name('AdaptdoseAnInnovativePlatform.success');


Route::get('/Pre-Inspection-Audits-for-Regulatory-Inspections',[FlatPagesController::class,'PreInspectionAuditsforRegulatoryInspections');
Route::post('/Pre-Inspection-Audits-for-Regulatory-Inspections-success',[FlatPagesController::class,'PreInspectionAuditsforRegulatoryInspections')->name('PreInspectionAuditsforRegulatoryInspections.post');
Route::get('/Pre-Inspection-Audits-for-Regulatory-Inspections-success',[FlatPagesController::class,'PreInspectionAuditsforRegulatoryInspections')->name('PreInspectionAuditsforRegulatoryInspections.success');



Route::get('/merck/continuous-bioprocessing-with-biocontinuum-platform',[FlatPagesController::class,'merckContinuousBioprocessingWithBiocontinuumPlatform');
Route::post('/merck/continuous-bioprocessing-with-biocontinuum-platform-success',[FlatPagesController::class,'merckContinuousBioprocessingWithBiocontinuumPlatform')->name('merckContinuousBioprocessingWithBiocontinuumPlatform.post');
Route::get('/merck/continuous-bioprocessing-with-biocontinuum-platform-success',[FlatPagesController::class,'merckContinuousBioprocessingWithBiocontinuumPlatform')->name('merckContinuousBioprocessingWithBiocontinuumPlatform.success');
// japan routes//
Route::get('jp/trilink/cleancap',[FlatPagesController::class,'TrilinkCleanCapJapan');

Route::get('jp/trilink/gmp-reagents',[FlatPagesController::class,'GmpReagentsJapan');
Route::post('jp/trilink/gmp-reagents-success',[FlatPagesController::class,'GmpReagentsJapan')->name('GmpReagentsJapan.post');
Route::get('jp/trilink/gmp-reagents-success',[FlatPagesController::class,'GmpReagentsJapan')->name('GmpReagentsJapan.success');

Route::get('jp/trilink/cleancap-reagents',[FlatPagesController::class,'TrilinkCleanCapReagentsJapan');
Route::post('jp/trilink/cleancap-reagents-success',[FlatPagesController::class,'TrilinkCleanCapReagentsJapan')->name('TrilinkCleanCapReagentsJapan.post');
Route::get('jp/trilink/cleancap-reagents-success',[FlatPagesController::class,'TrilinkCleanCapReagentsJapan')->name('TrilinkCleanCapReagentsJapan.success');


Route::get('jp/trilink/cleancap-case-study',[FlatPagesController::class,'TrilinkCleanCapCaseStudyJapan');
Route::post('jp/trilink/cleancap-case-study-success',[FlatPagesController::class,'TrilinkCleanCapCaseStudyJapan')->name('TrilinkCleanCapCaseStudyJapan.post');
Route::get('jp/trilink/cleancap-case-study-success',[FlatPagesController::class,'TrilinkCleanCapCaseStudyJapan')->name('TrilinkCleanCapCaseStudyJapan.success');

Route::get('jp/trilink/contact-us',[FlatPagesController::class,'ContactUsJapan');
Route::post('jp/trilink/contact-us-success',[FlatPagesController::class,'ContactUsJapan')->name('ContactUsJapan.post');
Route::get('jp/trilink/contact-us-success',[FlatPagesController::class,'ContactUsJapan')->name('ContactUsJapan.success');

Route::get('jp/economics-of-biologics-manufacturing-single-use-bioreactors',[FlatPagesController::class,'economicsOfBiologicsManufacturingSingleUseBioreactorsJapan');

Route::get('kr/economics-of-biologics-manufacturing-single-use-bioreactors',[FlatPagesController::class,'economicsOfBiologicsManufacturingSingleUseBioreactorsKorean');

//japan routes end//

Route::get('/trilink/cleancap',[FlatPagesController::class,'TrilinkCleanCap');
Route::get('/trilink/gmp-reagents',[FlatPagesController::class,'GmpReagents');
Route::post('/trilink/gmp-reagents-success',[FlatPagesController::class,'GmpReagents')->name('TrilinkGmpReagents.post');
Route::get('/trilink/gmp-reagents-success',[FlatPagesController::class,'GmpReagents')->name('TrilinkGmpReagents.success');

Route::get('/trilink/contact-us',[FlatPagesController::class,'ContactUs');
Route::post('/trilink/contact-us-success',[FlatPagesController::class,'ContactUs')->name('TrilinkContactUs.post');
Route::get('/trilink/contact-us-success',[FlatPagesController::class,'ContactUs')->name('TrilinkContactUs.success');


Route::get('/trilink/cleancap-reagents',[FlatPagesController::class,'TrilinkCleanCapReagents');
Route::post('/trilink/cleancap-reagents-success',[FlatPagesController::class,'TrilinkCleanCapReagents')->name('TrilinkCleanCapReagents.post');
Route::get('/trilink/cleancap-reagents-success',[FlatPagesController::class,'TrilinkCleanCapReagents')->name('TrilinkCleanCapReagents.success');

Route::get('/trilink/cleancap-case-study',[FlatPagesController::class,'TrilinkCleanCapCaseStudy');
Route::post('/trilink/cleancap-case-study-success',[FlatPagesController::class,'TrilinkCleanCapCaseStudy')->name('TrilinkCleanCapCaseStudy.post');
Route::get('/trilink/cleancap-case-study-success',[FlatPagesController::class,'TrilinkCleanCapCaseStudy')->name('TrilinkCleanCapCaseStudy.success');

Route::get('/bio-techne',[FlatPagesController::class,'BioTechne');

Route::get('/jp/bio-techne',[FlatPagesController::class,'BioTechnejp');
Route::get('/kr/bio-techne',[FlatPagesController::class,'BioTechnekr');
Route::get('/ch/bio-techne',[FlatPagesController::class,'BioTechnech');

Route::get('/jp/bio-techne/single-analyte-elisas',[FlatPagesController::class,'bioTechnesingleanalyteelisasjp');
Route::get('/jp/bio-techne/multiplex',[FlatPagesController::class,'bioTechnemultiplexjp');
Route::get('/jp/bio-techne/luminex-assays',[FlatPagesController::class,'bioTechneluminexassaysjp');

Route::get('/kr/bio-techne/single-analyte-elisas',[FlatPagesController::class,'bioTechnesingleanalyteelisaskr');
Route::get('/kr/bio-techne/multiplex',[FlatPagesController::class,'bioTechnemultiplexkr');
Route::get('/kr/bio-techne/luminex-assays',[FlatPagesController::class,'bioTechneluminexassayskr');

Route::get('/ch/bio-techne/single-analyte-elisas',[FlatPagesController::class,'bioTechnesingleanalyteelisasch');
Route::get('/ch/bio-techne/multiplex',[FlatPagesController::class,'bioTechnemultiplexch');
Route::get('/ch/bio-techne/luminex-assays',[FlatPagesController::class,'bioTechneluminexassaysch');


Route::get('/bio-techne/luminex-assays',[FlatPagesController::class,'BioTechneLuminexAssays');
Route::post('/bio-techne/luminex-assays-success',[FlatPagesController::class,'BioTechneLuminexAssays')->name('BioTechneLuminexAssays.post');
Route::get('/bio-techne/luminex-assays-success',[FlatPagesController::class,'BioTechneLuminexAssays')->name('BioTechneLuminexAssays.success');



Route::get('/bio-techne/simple-plex',[FlatPagesController::class,'BioTechneSimplePlex');
Route::post('/bio-techne/simple-plex-success',[FlatPagesController::class,'BioTechneSimplePlex')->name('BioTechneSimplePlex.post');
Route::get('/bio-techne/simple-plex-success',[FlatPagesController::class,'BioTechneSimplePlex')->name('BioTechneSimplePlex.success');

Route::get('/bio-techne/elisa-kits',[FlatPagesController::class,'BioTechneElisaKits');
Route::post('/bio-techne/elisa-kits-success',[FlatPagesController::class,'BioTechneElisaKits')->name('BioTechneElisaKits.post');
Route::get('/bio-techne/elisa-kits-success',[FlatPagesController::class,'BioTechneElisaKits')->name('BioTechneElisaKits.success');


Route::get('/bio-techne/immunoassays',[FlatPagesController::class,'BioTechneImmunoAssays');
Route::post('/bio-techne/immunoassays-success',[FlatPagesController::class,'BioTechneImmunoAssays')->name('BioTechneImmunoAssays.post');
Route::get('/bio-techne/immunoassays-success',[FlatPagesController::class,'BioTechneImmunoAssays')->name('BioTechneImmunoAssays.success');

Route::get('/bio-techne/proteome-profiler-antibody-arrays',[FlatPagesController::class,'BioTechneProteomeProfilerAntibodyArrays');
Route::post('/bio-techne/proteome-profiler-antibody-arrays-success',[FlatPagesController::class,'BioTechneProteomeProfilerAntibodyArrays')->name('BioTechneProteomeProfilerAntibodyArrays.post');
Route::get('/bio-techne/proteome-profiler-antibody-arrays-success',[FlatPagesController::class,'BioTechneProteomeProfilerAntibodyArrays')->name('BioTechneProteomeProfilerAntibodyArrays.success');

Route::get('/bio-techne/duoset-elisa-development-kits',[FlatPagesController::class,'BioTechneDuosetElisaDevelopmentKits');
Route::post('/bio-techne/duoset-elisa-development-kits-success',[FlatPagesController::class,'BioTechneDuosetElisaDevelopmentKits')->name('BioTechneDuosetElisaDevelopmentKits.post');
Route::get('/bio-techne/duoset-elisa-development-kits-success',[FlatPagesController::class,'BioTechneDuosetElisaDevelopmentKits')->name('BioTechneDuosetElisaDevelopmentKits.success');


Route::get('/upm-reflatac-pharma-labelling-sustainable-solution',[FlatPagesController::class,'UpmRaflatacMarketingPlan2022');
Route::post('/upm-reflatac-pharma-labelling-sustainable-solution-success',[FlatPagesController::class,'UpmRaflatacMarketingPlan2022')->name('UpmRaflatacMarketingPlan2022.post');
Route::get('/upm-reflatac-pharma-labelling-sustainable-solution-success',[FlatPagesController::class,'UpmRaflatacMarketingPlan2022')->name('UpmRaflatacMarketingPlan2022.success');

Route::get('/bio-techne/single-analyte-elisas',[FlatPagesController::class,'singleAnalyteElisas')->name('singleAnalyteElisas');
Route::post('/bio-techne/single-analyte-elisas-success',[FlatPagesController::class,'singleAnalyteElisas')->name('singleAnalyteElisas.post');
Route::get('/bio-techne/single-analyte-elisas-success',[FlatPagesController::class,'singleAnalyteElisas')->name('singleAnalyteElisas.success');


Route::get('/bio-techne/multiplex',[FlatPagesController::class,'multiplex')->name('multiplex');
Route::post('/bio-techne/multiplex-success',[FlatPagesController::class,'multiplex')->name('multiplex.post');
Route::get('/bio-techne/multiplex-success',[FlatPagesController::class,'multiplex')->name('multiplex.success');

Route::get("/master-control/connecting-quality-data-to-overcome-pharma's-toughest-challenges",[FlatPagesController::class,'ConnectingQualityData');
Route::post("/master-control/connecting-quality-data-to-overcome-pharma's-toughest-challenges-success",[FlatPagesController::class,'ConnectingQualityData')->name('ConnectingQualityData.post');
Route::get("/master-control/connecting-quality-data-to-overcome-pharma's-toughest-challenges-success",[FlatPagesController::class,'ConnectingQualityData')->name('ConnectingQualityData.success');


Route::get("/master-control/medtech-manufacturers-ultimate-guide-to-digitization",[FlatPagesController::class,'MedtechManufacturers');
Route::post("/master-control/medtech-manufacturers-ultimate-guide-to-digitization-success",[FlatPagesController::class,'MedtechManufacturers')->name('MedtechManufacturers.post');
Route::get("/master-control/medtech-manufacturers-ultimate-guide-to-digitization-success",[FlatPagesController::class,'MedtechManufacturers')->name('MedtechManufacturers.success');



Route::get("/master-control/mastering-data-to-drive-medical-device-innovation",[FlatPagesController::class,'MasteringDataToDriveMedicalDeviceInovation');
Route::post("/master-control/mastering-data-to-drive-medical-device-innovation-success",[FlatPagesController::class,'MasteringDataToDriveMedicalDeviceInovation')->name('MasteringDataToDriveMedicalDeviceInovation.post');
Route::get("/master-controlmastering-data-to-drive-medical-device-innovation-success",[FlatPagesController::class,'MasteringDataToDriveMedicalDeviceInovation')->name('MasteringDataToDriveMedicalDeviceInovation.success');



Route::get("/master-control/pharma-manufacturing-digital-journey",[FlatPagesController::class,'pharmaManufacturingDigitalJourney');
Route::post("/master-control/pharma-manufacturing-digital-journey-success",[FlatPagesController::class,'pharmaManufacturingDigitalJourney')->name('pharmaManufacturingDigitalJourney.post');
Route::get("/master-control/pharma-manufacturing-digital-journey-success",[FlatPagesController::class,'pharmaManufacturingDigitalJourney')->name('pharmaManufacturingDigitalJourney.success');

Route::get("/master-control/debunking-common-myths-about-manufacturing-execution-software",[FlatPagesController::class,'debunkingCommonMythsAboutManufacturingExecutionSoftware');
Route::post("/master-control/debunking-common-myths-about-manufacturing-execution-software-success",[FlatPagesController::class,'debunkingCommonMythsAboutManufacturingExecutionSoftware')->name('debunkingCommonMythsAboutManufacturingExecutionSoftware.post');
Route::get("/master-control/debunking-common-myths-about-manufacturing-execution-software-success",[FlatPagesController::class,'debunkingCommonMythsAboutManufacturingExecutionSoftware')->name('debunkingCommonMythsAboutManufacturingExecutionSoftware.success');



Route::get("/master-control/ultimate-guide-to-digitizing-medtech-manufacturing",[FlatPagesController::class,'ultimateGuideToDigitizingMedtechManufacturing');
Route::post("/master-control/ultimate-guide-to-digitizing-medtech-manufacturing-success",[FlatPagesController::class,'ultimateGuideToDigitizingMedtechManufacturing')->name('ultimateGuideToDigitizingMedtechManufacturing.post');
Route::get("/master-control/ultimate-guide-to-digitizing-medtech-manufacturing-success",[FlatPagesController::class,'ultimateGuideToDigitizingMedtechManufacturing')->name('ultimateGuideToDigitizingMedtechManufacturing.success');


Route::get("/pharma-machinery-assessment",'ZebraController@PharmaMachineryAssessment');
// Route::post('/pharma-machinery-assessment-post','ZebraaController@postForm')->name('healthcarezebra.post');
Route::post('/pharma-machinery-assessment-post','ZebraController@PharmaMachineryAssessment')->name('PharmaMachineryAssessment.post');
Route::get('/pharma-machinery-assessment-success','ZebraController@PharmaMachineryAssessment')->name('PharmaMachineryAssessment.success');

Route::get("/pharma-software-assessment",'ZebraController@PharmaSoftwareAssessment');
Route::post('/pharma-software-assessment-post','ZebraController@PharmaSoftwareAssessment')->name('PharmaSoftwareAssessment.post');
Route::get('/pharma-software-assessment-success','ZebraController@PharmaSoftwareAssessment')->name('pharmasoftwareassessment.success');

Route::get("/phenomenex",[FlatPagesController::class,'phenomenex');
Route::post("/phenomenex-success",[FlatPagesController::class,'phenomenex')->name('phenomenex.post');
Route::get("/phenomenex-success",[FlatPagesController::class,'phenomenex')->name('phenomenex.success');

Route::get("/economics-of-biologics-manufacturing-single-use-bioreactors",[FlatPagesController::class,'economicsOfBiologicsManufacturingSingleUseBioreactors');
Route::post("/economics-of-biologics-manufacturing-single-use-bioreactors-success",[FlatPagesController::class,'economicsOfBiologicsManufacturingSingleUseBioreactors')->name('economicsOfBiologicsManufacturingSingleUseBioreactors.post');
Route::get("/economics-of-biologics-manufacturing-single-use-bioreactors-success",[FlatPagesController::class,'economicsOfBiologicsManufacturingSingleUseBioreactors')->name('economicsOfBiologicsManufacturingSingleUseBioreactors.success');

Route::get("/advanced-program-in-pharmaceutical-quality-management",[FlatPagesController::class,'advancedProgramInPharmaceuticalQualityManagement');
Route::post("/advanced-program-in-pharmaceutical-quality-management-success",[FlatPagesController::class,'advancedProgramInPharmaceuticalQualityManagement')->name('advancedProgramInPharmaceuticalQualityManagement.post');
Route::get("/advanced-program-in-pharmaceutical-quality-management-success",[FlatPagesController::class,'advancedProgramInPharmaceuticalQualityManagement')->name('advancedProgramInPharmaceuticalQualityManagement.success');

Route::get("/insulin-adsorbent-astrea-bio",[FlatPagesController::class,'insulinAdsorbentAstreaBio');
Route::post("/insulin-adsorbent-astrea-bio-success",[FlatPagesController::class,'insulinAdsorbentAstreaBio')->name('insulinAdsorbentAstreaBio.post');
Route::get("/insulin-adsorbent-astrea-bio-success",[FlatPagesController::class,'insulinAdsorbentAstreaBio')->name('insulinAdsorbentAstreaBio.success');

Route::get("/snap-laboratory-glass-columns-astrea-bio",[FlatPagesController::class,'snapLaboratoryGlassColumnsAstreaBio');
Route::post("/snap-laboratory-glass-columns-astrea-bio-success",[FlatPagesController::class,'snapLaboratoryGlassColumnsAstreaBio')->name('snapLaboratoryGlassColumnsAstreaBio.post');
Route::get("/snap-laboratory-glass-columns-astrea-bio-success",[FlatPagesController::class,'snapLaboratoryGlassColumnsAstreaBio')->name('snapLaboratoryGlassColumnsAstreaBio.success');

Route::get('/etoxiclear-astrea-bio',[FlatPagesController::class,'etoxiclearAstreaBio');
Route::post('/etoxiclear-astrea-bio-success',[FlatPagesController::class,'etoxiclearAstreaBio')->name('etoxiclearAstreaBio.post');
Route::get('/etoxiclear-astrea-bio-success',[FlatPagesController::class,'etoxiclearAstreaBio')->name('etoxiclearAstreaBio.success');


Route::get('/extrusion-complimentary-whitepaper',[FlatPagesController::class,'extrusionComplimentaryWhitepaper');
Route::post("/extrusion-complimentary-whitepaper-success",[FlatPagesController::class,'extrusionComplimentaryWhitepaper')->name('extrusionComplimentaryWhitepaper.post');
Route::get("/extrusion-complimentary-whitepaper-success",[FlatPagesController::class,'extrusionComplimentaryWhitepaper')->name('extrusionComplimentaryWhitepaper.success');

Route::get('/thermofisher-biopharmaceutical-applications',[FlatPagesController::class,'thermofisherBiopharmaceuticalApplications');
Route::post("/thermofisher-biopharmaceutical-applications-success",[FlatPagesController::class,'thermofisherBiopharmaceuticalApplications')->name('thermofisherBiopharmaceuticalApplications.post');
Route::get("/thermofisher-biopharmaceutical-applications-success",[FlatPagesController::class,'thermofisherBiopharmaceuticalApplications')->name('thermofisherBiopharmaceuticalApplications.success');

Route::get('/recipharm',[FlatPagesController::class,'recipharm');
Route::post('/recipharm-success',[FlatPagesController::class,'recipharm')->name('recipharm.post');
Route::get('/recipharm-success',[FlatPagesController::class,'recipharm')->name('recipharm.success');

Route::get('/korber-enabling-digitization-pharma-biotech-production',[FlatPagesController::class,'korberEnablingDigitizationPharmaBiotechProduction');
Route::post('/korber-enabling-digitization-pharma-biotech-production-success',[FlatPagesController::class,'korberEnablingDigitizationPharmaBiotechProduction')->name('korberEnablingDigitizationPharmaBiotechProduction.post');
Route::get('/korber-enabling-digitization-pharma-biotech-production-success',[FlatPagesController::class,'korberEnablingDigitizationPharmaBiotechProduction')->name('korberEnablingDigitizationPharmaBiotechProduction.success');

Route::get('/eppendorf-bioprocessing-scale-up-challenges',[FlatPagesController::class,'eppendorfBioprocessingScaleUpChallenges');
Route::post('/eppendorf-bioprocessing-scale-up-challenges-success',[FlatPagesController::class,'eppendorfBioprocessingScaleUpChallenges')->name('eppendorfBioprocessingScaleUpChallenges.post');
Route::get('/eppendorf-bioprocessing-scale-up-challenges-success',[FlatPagesController::class,'eppendorfBioprocessingScaleUpChallenges')->name('eppendorfBioprocessingScaleUpChallenges.success');

Route::get('/bachem-continuous-chromatography',[FlatPagesController::class,'bachemContinuousChromatography');
Route::post('/bachem-continuous-chromatography-success',[FlatPagesController::class,'bachemContinuousChromatography')->name('bachemContinuousChromatography.post');
Route::get('/bachem-continuous-chromatography-success',[FlatPagesController::class,'bachemContinuousChromatography')->name('bachemContinuousChromatography.success');

Route::get('/cpc-industry-assessment','ZebraController@cpcindustryAssessment');
Route::post('/cpc-industry-assessment-post','ZebraController@cpcindustryAssessment')->name('cpcindustryAssessment.post');
Route::get('/cpc-industry-assessment-success','ZebraController@cpcindustryAssessmentsuccess')->name('cpcindustryAssessment.success');

Route::get('/acg-vegetarian-capsules',[FlatPagesController::class,'acgVegetarianCapsules');
Route::post('/acg-vegetarian-capsules-post',[FlatPagesController::class,'acgVegetarianCapsules')->name('acgVegetarianCapsules.post');
Route::get('/acg-vegetarian-capsules-success',[FlatPagesController::class,'acgVegetarianCapsules')->name('acgVegetarianCapsules.success');


Route::get('/bacto-cd-supreme',[FlatPagesController::class,'bactoCdSupreme');
Route::post('/bacto-cd-supreme-post',[FlatPagesController::class,'bactoCdSupreme')->name('bactoCdSupreme.post');
Route::get('/bacto-cd-supreme-success',[FlatPagesController::class,'bactoCdSupreme')->name('bactoCdSupreme.success');


Route::get('/perkin-elmer-chinese-medicine',[FlatPagesController::class,'perkinElmerChineseMedicine');
Route::post('/perkin-elmer-chinese-medicine-post',[FlatPagesController::class,'perkinElmerChineseMedicine')->name('perkinElmerChineseMedicine.post');
Route::get('/perkin-elmer-chinese-medicine-success',[FlatPagesController::class,'perkinElmerChineseMedicine')->name('perkinElmerChineseMedicine.success');

Route::get('/perkinelmer-gc-2400-gas-chromatography-system',[FlatPagesController::class,'perkinelmerGcSystem');
Route::post('/perkinelmer-gc-2400-gas-chromatography-system-post',[FlatPagesController::class,'perkinelmerGcSystem')->name('perkinelmerGcSystem.post');
Route::get('/perkinelmer-gc-2400-gas-chromatography-system-success',[FlatPagesController::class,'perkinelmerGcSystem')->name('perkinelmerGcSystem.success');

Route::get('/adare-pharma-whitepaper',[FlatPagesController::class,'adarePharmawhitepaper');
Route::post('/adare-pharma-whitepaper-post',[FlatPagesController::class,'adarePharmawhitepaper')->name('adarePharmawhitepaper.post');
Route::get('/adare-pharma-whitepaper-success',[FlatPagesController::class,'adarePharmawhitepaper')->name('adarePharmawhitepaper.success');


Route::get('/evonik-whitepaper',[FlatPagesController::class,'evonikWhitepaper');
Route::post('/evonik-whitepaper-post',[FlatPagesController::class,'evonikWhitepaper')->name('evonikWhitepaper.post');
Route::get('/evonik-whitepaper-success',[FlatPagesController::class,'evonikWhitepaper')->name('evonikWhitepaper.success');

Route::get('/gibco-cell-culture-bioprocessing',[FlatPagesController::class,'gibcocellculture');
Route::post('/gibco-cell-culture-bioprocessing-post',[FlatPagesController::class,'gibcocellculture')->name('gibcocellculture.post');
Route::get('/gibco-cell-culture-bioprocessing-success',[FlatPagesController::class,'gibcocellculture')->name('gibcocellculture.success');


Route::get('/gibco-thermofisher-hip-cho',[FlatPagesController::class,'gibcothermofisherhipcho');
Route::post('/gibco-thermofisher-hip-cho-post',[FlatPagesController::class,'gibcothermofisherhipcho')->name('gibcothermofisherhipcho.post');
Route::get('/gibco-thermofisher-hip-cho-success',[FlatPagesController::class,'gibcothermofisherhipcho')->name('gibcothermofisherhipcho.success');

Route::get('/5factor-indian-in-2023',[FlatPagesController::class,'fivefactorindianin');
Route::post('/5factor-indian-in-2023-post',[FlatPagesController::class,'fivefactorindianin')->name('fivefactorindianin.post');
Route::get('/5factor-indian-in-2023-success',[FlatPagesController::class,'fivefactorindianin')->name('fivefactorindianin.success');

Route::get('/en/thermofisher-cho-app-note-cs-wp',[FlatPagesController::class,'thermofisherchoappnotecswp');
Route::post('/en/thermofisher-cho-app-note-cs-wp-post',[FlatPagesController::class,'thermofisherchoappnotecswp')->name('thermofisherchoappnotecswp.post');
Route::get('/en/thermofisher-cho-app-note-cs-wp-success',[FlatPagesController::class,'thermofisherchoappnotecswp')->name('thermofisherchoappnotecswp.success');

Route::get('/acg-wildest-range-capsules',[FlatPagesController::class,'acgwildestrangecapsules');
Route::post('/acg-wildest-range-capsules-post',[FlatPagesController::class,'acgwildestrangecapsules')->name('acgwildestrangecapsules.post');
Route::get('/acg-wildest-range-capsules-success',[FlatPagesController::class,'acgwildestrangecapsules')->name('acgwildestrangecapsules.success');

Route::get('/acg-world-films-and-foils',[FlatPagesController::class,'acgworldfilmsandfoils');
Route::post('/acg-world-films-and-foils-post',[FlatPagesController::class,'acgworldfilmsandfoils')->name('acgworldfilmsandfoils.post');
Route::get('/acg-world-films-and-foils-success',[FlatPagesController::class,'acgworldfilmsandfoils')->name('acgworldfilmsandfoils.success');

Route::get('/cn/thermofisher-cho-app-note-cs-wp',[FlatPagesController::class,'thermofisherchoappnotecswpcn');
Route::get('/jp/thermofisher-cho-app-note-cs-wp',[FlatPagesController::class,'thermofisherchoappnotecswpjp');
Route::get('/kr/thermofisher-cho-app-note-cs-wp',[FlatPagesController::class,'thermofisherchoappnotecswpkr');

Route::get('/thermofisher-single-use-perfusion',[FlatPagesController::class,'thermofisherSingleUsePerfusion');
Route::post('/thermofisher-single-use-perfusion-post',[FlatPagesController::class,'thermofisherSingleUsePerfusion')->name('thermofisherSingleUsePerfusion.post');
Route::get('/thermofisher-single-use-perfusion-success',[FlatPagesController::class,'thermofisherSingleUsePerfusion')->name('thermofisherSingleUsePerfusion.success');



Route::get('/thermofisher-single-use-perfusion-jp',[FlatPagesController::class,'thermofisherSingleUsePerfusionJp');
Route::get('/thermofisher-single-use-perfusion-kr',[FlatPagesController::class,'thermofisherSingleUsePerfusionKr');
Route::get('/thermofisher-single-use-perfusion-cn',[FlatPagesController::class,'thermofisherSingleUsePerfusionCn');

Route::get('/acg-nutra-vegetarian-capsules',[FlatPagesController::class,'acgNutraCampaignCreatives');
Route::post('/acg-nutra-vegetarian-capsules-post',[FlatPagesController::class,'acgNutraCampaignCreatives')->name('acgNutraCampaignCreatives.post');
Route::get('/acg-nutra-vegetarian-capsules-success',[FlatPagesController::class,'acgNutraCampaignCreatives')->name('acgNutraCampaignCreatives.success');


Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23',[FlatPagesController::class,'thermoFisherQualtrakPcrMs');
Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23/modalities',[FlatPagesController::class,'thermoFisherQualtrakPcrMsModalities');
Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23/modalities-mabs',[FlatPagesController::class,'thermoFisherQualtrakPcrMsModalitiesMabs');
Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23/modalities-vaccines',[FlatPagesController::class,'thermoFisherQualtrakPcrMsModalitiesVaccines');
Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23/modalities-cell-&-gene',[FlatPagesController::class,'thermoFisherQualtrakPcrMsModalitiesCellGene');
Route::get('/thermo-fisher-qualtrak-pcr-ms-r1-fb23/contact-qualtrak',[FlatPagesController::class,'thermoFisherQualtrakContact');

Route::get('/thermofisher-digital-pcr-system',[FlatPagesController::class,'thermofisherDigitalPcrSystem');
Route::post('/thermofisher-digital-pcr-system-success',[FlatPagesController::class,'thermofisherDigitalPcrSystem')->name('thermofisherDigitalPcrSystem.post');
Route::get('/thermofisher-digital-pcr-system-success',[FlatPagesController::class,'thermofisherDigitalPcrSystem')->name('thermofisherDigitalPcrSystem.success');


Route::get('/thermofisher-qualtrak-workflows-mab',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAb');
Route::post('/thermofisher-qualtrak-workflows-mab-success',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAb')->name('thermofisherQualTrakWorkflowsMAb.post');
Route::get('/thermofisher-qualtrak-workflows-mab-success',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAb')->name('thermofisherQualTrakWorkflowsMAb.success');

Route::get('/tf-clinical-trial-regulation-regulatory-landscape-decentralised-clinical-trials',[FlatPagesController::class,'tfClinicalTrialRegulationRegulatoryLandscapeDecentralisedClinicalTrials');
Route::post('/tf-clinical-trial-regulation-regulatory-landscape-decentralised-clinical-trials-post',[FlatPagesController::class,'tfClinicalTrialRegulationRegulatoryLandscapeDecentralisedClinicalTrials')->name('tfClinicalTrialRegulationRegulatory.post');
Route::get('/tf-clinical-trial-regulation-regulatory-landscape-decentralised-clinical-trials-success',[FlatPagesController::class,'tfClinicalTrialRegulationRegulatoryLandscapeDecentralisedClinicalTrials')->name('tfClinicalTrialRegulationRegulatory.success');

Route::get('/sparkplug-open-specification-critical-achieving-roi-in-iiot',[FlatPagesController::class,'sparkplugopenSpecificationcriticalachieving');

Route::get('/master-control/manufacturing-software-buyers-guide',[FlatPagesController::class,'mastercontrolManufacturingsoftwarebuyersguide');
Route::post('/master-control/manufacturing-software-buyers-guide-post',[FlatPagesController::class,'mastercontrolManufacturingsoftwarebuyersguide')->name('mastercontrolManufacturingsoftwarebuyersguide.post');
Route::get('/master-control/manufacturing-software-buyers-guide-success',[FlatPagesController::class,'mastercontrolManufacturingsoftwarebuyersguide')->name('mastercontrolManufacturingsoftwarebuyersguide.success');


Route::get('/kr/master-control/manufacturing-software-buyers-guide',[FlatPagesController::class,'krmastercontrolManufacturingsoftwarebuyersguide');


Route::get('/kr/master-control/manufacturing-excellence-software-buyers-guide',[FlatPagesController::class,'krmastercontrolManufacturingexcellencesoftwarebuyersguide');


Route::get('/master-control/manufacturing-excellence-software-buyers-guide',[FlatPagesController::class,'mastercontrolManufacturingexcellencesoftwarebuyersguide');
Route::post('/master-control/manufacturing-excellence-software-buyers-guide-post',[FlatPagesController::class,'mastercontrolManufacturingexcellencesoftwarebuyersguide')->name('mastercontrolManufacturingexcellencesoftwarebuyersguide.post');
Route::get('/master-control/manufacturing-excellence-software-buyers-guide-success',[FlatPagesController::class,'mastercontrolManufacturingexcellencesoftwarebuyersguide')->name('mastercontrolManufacturingexcellencesoftwarebuyersguide.success');


Route::get('/thermofisher-digital-pcr-system-jp',[FlatPagesController::class,'thermofisherDigitalPcrSystemJp');
Route::post('/thermofisher-digital-pcr-system-jp-post',[FlatPagesController::class,'thermofisherDigitalPcrSystemJp')->name('thermofisherDigitalPcrSystemJp.post');
Route::get('/thermofisher-digital-pcr-system-jp-success',[FlatPagesController::class,'thermofisherDigitalPcrSystemJp')->name('thermofisherDigitalPcrSystemJp.success');

Route::get('/thermofisher-digital-pcr-system-cn',[FlatPagesController::class,'thermofisherDigitalPcrSystemCn');
Route::post('/thermofisher-digital-pcr-system-cn-post',[FlatPagesController::class,'thermofisherDigitalPcrSystemCn')->name('thermofisherDigitalPcrSystemCn.post');
Route::get('/thermofisher-digital-pcr-system-cn-success',[FlatPagesController::class,'thermofisherDigitalPcrSystemCn')->name('thermofisherDigitalPcrSystemCn.success');

Route::get('/thermofisher-digital-pcr-system-kr',[FlatPagesController::class,'thermofisherDigitalPcrSystemKr');
Route::post('/thermofisher-digital-pcr-system-kr-post',[FlatPagesController::class,'thermofisherDigitalPcrSystemKr')->name('thermofisherDigitalPcrSystemKr.post');
Route::get('/thermofisher-digital-pcr-system-kr-success',[FlatPagesController::class,'thermofisherDigitalPcrSystemKr')->name('thermofisherDigitalPcrSystemKr.success');

Route::get('/thermofisher-qualtrak-workflows-mab-jp',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbJp');
Route::post('/thermofisher-qualtrak-workflows-mab-jp-post',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbJp')->name('thermofisherQualTrakWorkflowsMAbJp.post');
Route::get('/thermofisher-qualtrak-workflows-mab-jp-success',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbJp')->name('thermofisherQualTrakWorkflowsMAbJp.success');


Route::get('/thermofisher-qualtrak-workflows-mab-cn',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbCn');
Route::post('/thermofisher-qualtrak-workflows-mab-cn-post',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbCn')->name('thermofisherQualTrakWorkflowsMAbCn.post');
Route::get('/thermofisher-qualtrak-workflows-mab-cn-success',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbCn')->name('thermofisherQualTrakWorkflowsMAbCn.success');

Route::get('/thermofisher-qualtrak-workflows-mab-kr',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbKr');
Route::post('/thermofisher-qualtrak-workflows-mab-kr-post',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbKr')->name('thermofisherQualTrakWorkflowsMAbKr.post');
Route::get('/thermofisher-qualtrak-workflows-mab-kr-success',[FlatPagesController::class,'thermofisherQualTrakWorkflowsMAbKr')->name('thermofisherQualTrakWorkflowsMAbKr.success');

Route::get('/thermofisher-scientific-mobile-app',[FlatPagesController::class,'thermofisherScientificMobileapp');
Route::post('/thermofisher-scientific-mobile-app-success',[FlatPagesController::class,'thermofisherScientificMobileapp')->name('thermofisherScientificMobileapp.post');
Route::get('/thermofisher-scientific-mobile-app-success',[FlatPagesController::class,'thermofisherScientificMobileapp')->name('thermofisherScientificMobileapp.success');


Route::get('/ami-polymer-sealing-expert-silicone',[FlatPagesController::class,'amiPolymersealingexpertsilicone');

Route::get('/ami-polymer-platinum-cured-silicone-tube',[FlatPagesController::class,'amiPolymerplatinumcuredsiliconeTube');
Route::post('/ami-polymer-platinum-cured-silicone-tube-success',[FlatPagesController::class,'amiPolymerplatinumcuredsiliconeTube')->name('amiPolymerplatinumcuredsiliconeTube.post');
Route::get('/ami-polymer-platinum-cured-silicone-tube-success',[FlatPagesController::class,'amiPolymerplatinumcuredsiliconeTube')->name('amiPolymerplatinumcuredsiliconeTube.success');

Route::get('/ami-polymer-2d-3d-single-use-bags',[FlatPagesController::class,'amiPolymer2d3dsingleusebags');
Route::post('/ami-polymer-2d-3d-single-use-bags-success',[FlatPagesController::class,'amiPolymer2d3dsingleusebags')->name('amiPolymer2d3dsingleusebags.post');
Route::get('/ami-polymer-2d-3d-single-use-bags-success',[FlatPagesController::class,'amiPolymer2d3dsingleusebags')->name('amiPolymer2d3dsingleusebags.success');

Route::get('/ami-polymer-2d-single-use-bags',[FlatPagesController::class,'amiPolymer2dsingleusebags');
Route::post('/ami-polymer-2d-single-use-bags-success',[FlatPagesController::class,'amiPolymer2dsingleusebags')->name('amiPolymer2dsingleusebags.post');
Route::get('/ami-polymer-2d-single-use-bags-success',[FlatPagesController::class,'amiPolymer2dsingleusebags')->name('amiPolymer2dsingleusebags.success');

Route::get('/ami-polymer-single-use-assemblies-system',[FlatPagesController::class,'amiPolymersingleuseassembliessystem');
Route::post('/ami-polymer-single-use-assemblies-system-success',[FlatPagesController::class,'amiPolymersingleuseassembliessystem')->name('amiPolymersingleuseassembliessystem.post');
Route::get('/ami-polymer-single-use-assemblies-system-success',[FlatPagesController::class,'amiPolymersingleuseassembliessystem')->name('amiPolymersingleuseassembliessystem.success');


Route::get('/ami-polymer-imafit-polyester-braiding',[FlatPagesController::class,'amiPolymerimafitpolyesterbraiding');
Route::post('/ami-polymer-imafit-polyester-braiding-success',[FlatPagesController::class,'amiPolymerimafitpolyesterbraiding')->name('amiPolymerimafitpolyesterbraiding.post');
Route::get('/ami-polymer-imafit-polyester-braiding-success',[FlatPagesController::class,'amiPolymerimafitpolyesterbraiding')->name('amiPolymerimafitpolyesterbraiding.success');

});

Route::get("/wuxi-xdc-research-platform",[WebinarController::class,'wuxiXdcResaerchPlatform');
Route::post('/wuxi-xdc-research-platform-success',[WebinarController::class,'wuxiXdcResaerchPlatform')->name('wuxiXdcResaerchPlatform.post');
Route::get('/wuxi-xdc-research-platform-success',[WebinarController::class,'wuxiXdcResaerchPlatform')->name('wuxiXdcResaerchPlatform.success');

Route::get("/wuxi-xdc-research-platform/kr",[WebinarController::class,'wuxiXdcResaerchPlatformKr');
Route::post('/wuxi-xdc-research-platform/kr-success',[WebinarController::class,'wuxiXdcResaerchPlatformKr')->name('wuxiXdcResaerchPlatformKr.post');
Route::get('/wuxi-xdc-research-platform/kr-success',[WebinarController::class,'wuxiXdcResaerchPlatformKr')->name('wuxiXdcResaerchPlatformKr.success');

Route::get("/biolector-and-multisizer-4e-coulter-counter-webinar",[WebinarController::class,'bioLectorAndMultisizer4ECoulterCounterWebinar');
Route::post('/biolector-and-multisizer-4e-coulter-counter-webinar-success',[WebinarController::class,'bioLectorAndMultisizer4ECoulterCounterWebinar')->name('bioLectorAndMultisizer4ECoulterCounterWebinar.post');
Route::get('/biolector-and-multisizer-4e-coulter-counter-webinar-success',[WebinarController::class,'bioLectorAndMultisizer4ECoulterCounterWebinar')->name('bioLectorAndMultisizer4ECoulterCounterWebinar.success');

Route::get("/suez-sievers-instruments-webinar-rtt",[WebinarController::class,'suezSieversInstrumentsWebinarRtt');
Route::post('/suez-sievers-instruments-webinar-rtt-success',[WebinarController::class,'suezSieversInstrumentsWebinarRtt')->name('suezSieversInstrumentsWebinarRtt.post');
Route::get('/suez-sievers-instruments-webinar-rtt-success',[WebinarController::class,'suezSieversInstrumentsWebinarRtt')->name('suezSieversInstrumentsWebinarRtt.success');


Route::get('/promotion/the-adaptive-plant-to-enable-personalized-healthcare',[WebinarController::class,'theAdaptivePlantToEnablePersonalizedHealthcare');
Route::post('/promotion/the-adaptive-plant-to-enable-personalized-healthcare-success',[WebinarController::class,'theAdaptivePlantToEnablePersonalizedHealthcare')->name('theAdaptivePlantToEnablePersonalizedHealthcare.post');
Route::get('/promotion/the-adaptive-plant-to-enable-personalized-healthcare-success',[WebinarController::class,'theAdaptivePlantToEnablePersonalizedHealthcare')->name('theAdaptivePlantToEnablePersonalizedHealthcare.success');

Route::get('/promotion/acg-world-capsules-webinar',[WebinarController::class,'acgWorldCapsulesWebinar');
Route::post('/promotion/acg-world-capsules-webinar-success',[WebinarController::class,'acgWorldCapsulesWebinar')->name('acgWorldCapsulesWebinar.post');
Route::get('/promotion/acg-world-capsules-webinar-success',[WebinarController::class,'acgWorldCapsulesWebinar')->name('acgWorldCapsulesWebinar.success');

Route::get('/promotion/acg-360-series-webinar',[WebinarController::class,'acg360SeriesWebinar');
Route::post('/promotion/acg-360-series-webinar',[WebinarController::class,'acg360SeriesWebinar')->name('acg360SeriesWebinar.post');
Route::get('/promotion/acg-360-series-webinar-success',[WebinarController::class,'acg360SeriesWebinar')->name('acg360SeriesWebinar.success');

Route::get('/promotion/nsf-webinar',[WebinarController::class,'nsfWebinar');
Route::post('/promotion/nsf-webinar-success',[WebinarController::class,'nsfWebinar')->name('nsfWebinar.post');
Route::get('/promotion/nsf-webinar-success',[WebinarController::class,'nsfWebinar')->name('nsfWebinar.success');

Route::get('/future-of-aseptic-connections-in-cell-and-gene-therapies',[WebinarController::class,'futureOfAsepticConnectionsInCellAndGeneTherapies');
Route::post('/future-of-aseptic-connections-in-cell-and-gene-therapies-success',[WebinarController::class,'futureOfAsepticConnectionsInCellAndGeneTherapies')->name('futureOfAsepticConnectionsInCellAndGeneTherapies.post');
Route::get('/future-of-aseptic-connections-in-cell-and-gene-therapies-success',[WebinarController::class,'futureOfAsepticConnectionsInCellAndGeneTherapies')->name('futureOfAsepticConnectionsInCellAndGeneTherapies.success');

Route::get('/aseptic-connections-in-cell-and-gene-therapies',[WebinarController::class,'asepticConnectionsInCellAndGeneTherapies');

Route::get('/acg-trends-in-capsules-development',[WebinarController::class,'acgTrendsincapsulesDevelopment');
Route::post('/acg-trends-in-capsules-development-success',[WebinarController::class,'acgTrendsincapsulesDevelopment')->name('acgTrendsincapsulesDevelopment.post');
Route::get('/acg-trends-in-capsules-development-success',[WebinarController::class,'acgTrendsincapsulesDevelopment')->name('acgTrendsincapsulesDevelopment.success');


Route::get('bachem-microspheres-nanoparticles','FlatPagesController@bachemMicrospheresNanoparticles');

Route::get('/promotion/nsf-webinar-gmp',[WebinarController::class,'nsfWebinarGmp');
Route::post('/promotion/nsf-webinar-gmp-success',[WebinarController::class,'nsfWebinarGmp')->name('nsfWebinarGmp.post');
Route::get('/promotion/nsf-webinar-gmp-success',[WebinarController::class,'nsfWebinarGmp')->name('nsfWebinarGmp.success');

Route::get('/promotion/acg-360-webinar-series',[WebinarController::class,'acg360WebinarSeries');
Route::post('/promotion/acg-360-webinar-series-success',[WebinarController::class,'acg360WebinarSeries')->name('acg360WebinarSeries.post');
Route::get('/promotion/acg-360-webinar-series-success',[WebinarController::class,'acg360WebinarSeries')->name('acg360WebinarSeries.success');

Route::get('/promotion/beckman-coulter-life-sciences-webinar',[WebinarController::class,'beckmaCoulterLifeSciencesWebinar');
Route::post('/promotion/beckman-coulter-life-sciences-webinar-success',[WebinarController::class,'beckmaCoulterLifeSciencesWebinar')->name('beckmaCoulterLifeSciencesWebinar.post');
Route::get('/promotion/beckman-coulter-life-sciences-webinar-success',[WebinarController::class,'beckmaCoulterLifeSciencesWebinar')->name('beckmaCoulterLifeSciencesWebinar.success');

Route::get("/perkinelmer-chinese-medicine-on-demand-webinar",[WebinarController::class,'perkinelmerChineseMedicineOnDemandWebinar');
Route::post('/perkinelmer-chinese-medicine-on-demand-webinar-success',[WebinarController::class,'perkinelmerChineseMedicineOnDemandWebinar')->name('perkinelmerChineseMedicineOnDemandWebinar.post');
Route::get('/perkinelmer-chinese-medicine-on-demand-webinar-success',[WebinarController::class,'perkinelmerChineseMedicineOnDemandWebinar')->name('perkinelmerChineseMedicineOnDemandWebinar.success');

Route::get('/promotion/acg-360-webinar-episode-6',[WebinarController::class,'acg360webinarEpisode6');
Route::post('/promotion/acg-360-webinar-episode-6',[WebinarController::class,'acg360webinarEpisode6')->name('acg360webinarEpisode6.post');
Route::get('/promotion/acg-360-webinar-episode-6-success',[WebinarController::class,'acg360webinarEpisode6')->name('acg360webinarEpisode6.success');

Route::get('/promotion/beckman-coulter-webinar',[WebinarController::class,'beckmanCoulter');
Route::post('/promotion/beckman-coulter-webinar-success',[WebinarController::class,'beckmanCoulter')->name('beckmanCoulter.post');
Route::get('/promotion/beckman-coulter-webinar-success',[WebinarController::class,'beckmanCoulter')->name('beckmanCoulter.success');

Route::get('/promotion/the-future-of-titanium-dioxide-in-pharma',[WebinarController::class,'thefutureoftitaniumdioxideinpharma');
Route::post('/promotion/the-future-of-titanium-dioxide-in-pharma-post',[WebinarController::class,'thefutureoftitaniumdioxideinpharma')->name('thefutureoftitaniumdioxideinpharma.post');
Route::get('/promotion/the-future-of-titanium-dioxide-in-pharma-success',[WebinarController::class,'thefutureoftitaniumdioxideinpharma')->name('thefutureoftitaniumdioxideinpharma.success');

Route::get('/lonza-webinar-feb14',[WebinarController::class,'lonzawebinarfeb14');
Route::post('/lonza-webinar-feb14-success',[WebinarController::class,'lonzawebinarfeb14')->name('lonzawebinarfeb14.post');
Route::get('/lonza-webinar-feb14-success',[WebinarController::class,'lonzawebinarfeb14')->name('lonzawebinarfeb14.success');

Route::get('promotion/genscript-probio-webinar',[WebinarController::class,'GenScriptProBioWebinar');
Route::post('promotion/genscript-probio-webinar-success',[WebinarController::class,'GenScriptProBioWebinar')->name('GenScriptProBioWebinar.post');
Route::get('/promotion/genscript-probio-webinar-success',[WebinarController::class,'GenScriptProBioWebinar')->name('GenScriptProBioWebinar.success');

Route::get('promotion/master-control/digital-trends-quality-management-life-sciences-webinar',[WebinarController::class,'mastercontrolDigitaltrends');
Route::post('promotion/master-control/digital-trends-quality-management-life-sciences-webinar-success',[WebinarController::class,'mastercontrolDigitaltrends')->name('mastercontrolDigitaltrends.post');
Route::get('/promotion/master-control/digital-trends-quality-management-life-sciences-webinar-success',[WebinarController::class,'mastercontrolDigitaltrends')->name('mastercontrolDigitaltrends.success');

Route::get('thermofisher-scientific-bio-banking-webinar-may23',[WebinarController::class,'thermofisherScientificbiobankingWebinarmay23');
Route::post('/thermofisher-scientific-bio-banking-webinar-may23-post',[WebinarController::class,'thermofisherScientificbiobankingWebinarmay23')->name('thermofisherScientificbiobankingWebinarmay23.post');
Route::get('/thermofisher-scientific-bio-banking-webinar-may23-success',[WebinarController::class,'thermofisherScientificbiobankingWebinarmay23')->name('thermofisherScientificbiobankingWebinarmay23.success');
