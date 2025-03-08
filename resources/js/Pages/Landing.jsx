import Header from "../../Components/Public/Header";
import Footer from "../../Components/Public/Footer";

export default function Landing() {
    return (
        <>
        <Header />
            <div className="container mx-auto">
                {/* Hero Section */}
                <div className="bg-white dark:bg-gray-900">
                    <div className="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                        <a href="#" className="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                            <span className="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span className="text-sm font-medium">Paws Out Kennel Management System! See what's new</span>
                            <svg className="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>
                        </a>
                        <h1 className="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">The kennel management system with <span className="italic">Jazz Hands!</span></h1>
                        <p className="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">We know that running a rescue or shelter is hard and we want to help make it just a little easier.</p>
                        <div className="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                            <a href="#" className="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Learn more
                                <svg className="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clipRule="evenodd"></path></svg>
                            </a>
                            <a href="#" className="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                <svg className="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                Watch video
                            </a>
                        </div>
                    </div>
                </div>
                {/* End Hero Section */}

                {/* Feature Section */}
                <div className="bg-white dark:bg-gray-900 flex items-center">
                    <div className="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                        <div className="max-w-screen-md mb-8 lg:mb-16">
                            <h2 className="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for rescues ran by a single person and shelters with a staff of volunteers.</h2>
                            <p className="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                        </div>
                        <div className="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 612.00169 586.10335">
                                        <path d="m 191.85546,461.64934 c -12.49149,-3.38809 -20.02865,-7.80245 -29.82023,-17.46507 -22.70149,-22.40248 -25.72731,-54.04926 -7.63149,-79.81679 6.35152,-9.04424 17.22673,-18.23954 25.49951,-21.56058 2.47988,-0.99552 4.50887,-2.40568 4.50887,-3.13369 0,-1.49678 -9.18213,-25.92995 -10.08329,-26.83109 -0.32119,-0.3212 -3.55031,0.77405 -7.17583,2.43386 -18.28928,8.3731 -36.09095,25.66512 -44.64512,43.36693 -2.91674,6.03585 -5.94591,13.67959 -6.73148,16.98609 -1.55755,6.55577 -3.5061,9.81499 -3.5061,5.86443 0,-4.17835 -10.15876,-23.46272 -17.657277,-33.51879 C 78.280698,326.07177 62.410871,315.83816 40.506818,313.08446 l -6.234678,-0.78381 -1.309893,-6.10783 c -5.683613,-26.50177 -7.068506,-56.26141 -3.278622,-70.45349 3.289779,-12.3193 3.517156,-12.30178 8.621967,0.66391 2.549852,6.47638 5.861091,13.73682 7.358308,16.13431 5.335601,8.54393 13.436624,12.55092 23.432622,11.59043 23.192412,-2.2285 50.464588,-32.3449 95.328018,-105.26983 12.32062,-20.027 33.21357,-56.00209 33.21357,-57.18967 0,-0.8917 -24.13241,-14.009682 -25.72762,-13.985118 -0.72905,0.01125 -3.43379,3.933932 -6.01052,8.717134 -14.68775,27.264934 -48.459,81.020074 -64.28652,102.327604 -14.110387,18.99584 -28.533255,33.98228 -31.69129,32.9296 -0.57832,-0.19278 -2.944806,-5.06585 -5.258843,-10.82904 l -4.207352,-10.47853 4.812271,-6.3738 c 8.112628,-10.74511 11.424062,-19.32301 11.48211,-29.74321 0.04452,-7.99894 -0.404289,-9.85569 -3.97297,-16.43496 C 67.63525,148.31811 58.954339,137.5424 52.482981,132.60652 45.71517,127.44455 36.399633,124.10986 22.320587,121.80928 15.913091,120.76226 9.5137978,119.68974 8.0999347,119.42589 6.0053253,119.03501 5.0365307,117.12005 2.8684787,109.08514 1.4050418,103.66156 0.12705256,95.946504 0.02850402,91.94057 -0.13474243,85.304713 0.27680511,84.015536 4.6566474,77.442861 7.3006748,73.475062 13.351436,66.148476 18.102785,61.161554 50.797571,26.845756 108.76469,5.8468548 183.81093,1.1328833 L 201.84638,0 209.9317,5.462816 c 4.44693,3.0045484 9.81306,7.430589 11.92472,9.835646 l 3.8394,4.372831 -4.10936,0.854087 c -2.26014,0.469748 -7.41213,1.213739 -11.44884,1.653315 -4.03672,0.439576 -7.959,1.182109 -8.71619,1.650074 -1.0064,0.621993 -0.63118,4.550993 1.39505,14.607653 l 2.77176,13.756802 4.14089,-0.08021 c 2.27749,-0.04414 12.39705,-0.990978 22.48791,-2.104135 30.88988,-3.407571 67.67899,-2.616137 106.72541,2.295952 l 6.03844,0.759641 2.75647,-14.143764 c 2.20075,-11.292203 2.44555,-14.33594 1.21421,-15.096946 -0.84825,-0.524248 -5.04251,-1.328021 -9.32056,-1.786163 -4.27806,-0.45814 -9.11051,-1.189275 -10.73879,-1.624742 l -2.96049,-0.791758 3.81735,-4.347733 c 2.09956,-2.391253 7.45577,-6.8053602 11.90269,-9.809126 l 8.08532,-5.46139395 18.63663,1.18236605 c 40.75614,2.5856943 76.03942,9.7236469 104.92232,21.2262059 l 10.53676,4.196253 -2.31447,3.775052 c -4.25945,6.947428 -6.46511,17.224281 -5.87704,27.382919 0.4498,7.769944 1.3195,10.954525 5.05677,18.516396 10.17629,20.590313 29.63485,32.391822 57.5095,34.879202 5.12508,0.45732 9.31832,1.29665 9.31832,1.86516 0,2.53337 -6.60991,18.20687 -11.98072,28.40885 -6.66804,12.66605 -14.27458,24.12189 -22.88466,34.46543 -8.91845,10.71398 -17.96777,26.24455 -24.2301,41.58405 -3.0972,7.58653 -6.14237,13.96406 -6.76703,14.17228 -3.08904,1.02968 -17.87087,-14.32074 -31.64008,-32.85711 -15.95206,-21.47497 -47.22076,-71.12959 -63.01294,-100.064405 -3.3065,-6.058241 -6.60831,-11.027943 -7.33737,-11.043771 -1.58751,-0.0345 -25.72762,13.079856 -25.72762,13.976756 0,1.12942 20.60019,36.71485 32.26266,55.73155 36.66013,59.77767 63.39637,92.98041 82.29134,102.19465 9.95255,4.85342 18.18958,5.87609 25.33855,3.14587 8.59147,-3.28111 13.16036,-9.64616 20.16236,-28.08867 1.5692,-4.13312 3.24079,-7.51477 3.71464,-7.51477 1.21376,0 3.07792,7.4563 4.66877,18.67419 4.03483,28.45162 -6.38438,78.77911 -27.27905,131.76502 l -5.50935,13.97096 -12.81684,0.81813 c -7.04926,0.44999 -18.18749,1.60269 -24.75165,2.56154 -6.56414,0.95888 -12.31833,1.74341 -12.78707,1.74341 -0.46876,0 -1.48553,-4.33084 -2.2595,-9.62409 -4.38457,-29.9863 -21.88314,-54.61039 -49.50816,-69.66818 -4.88304,-2.66164 -9.47194,-4.84696 -10.19756,-4.85625 -1.2043,-0.0155 -11.39121,24.57791 -11.24083,27.1377 0.0356,0.60551 3.38859,2.72411 7.45114,4.70801 16.90099,8.2534 30.53745,27.21821 33.56264,46.67701 4.58247,29.47552 -14.40693,59.19508 -44.45657,69.57727 -6.67976,2.30787 -10.38986,2.76426 -21.87151,2.69053 -12.2932,-0.0789 -14.76092,-0.46749 -22.24373,-3.5023 -8.37601,-3.39709 -14.98593,-4.04829 -24.34786,-2.39873 l -3.90768,0.68854 v -16.0356 -16.03558 l 8.71713,-2.03398 c 11.01493,-2.57014 24.08678,-8.97192 31.31931,-15.33824 8.0887,-7.11997 14.01375,-19.6128 14.90767,-31.4325 1.18949,-15.72771 -3.47933,-30.92581 -10.685,-34.78217 -1.34561,-0.72015 -15.19044,-2.2887 -30.76626,-3.48568 -27.34354,-2.1013 -29.30322,-2.10107 -56.8545,0.007 -15.69415,1.20064 -29.53687,2.72293 -30.76163,3.38288 -7.6839,4.14048 -10.51901,12.10054 -10.56964,29.67626 -0.0323,11.20673 0.40204,14.32743 2.84478,20.44018 6.00998,15.03944 24.29118,28.41398 43.73518,31.99668 l 8.05387,1.48397 v 16.03829 16.0383 l -4.78679,-0.76546 c -9.2364,-1.47695 -15.07156,-0.86882 -23.46875,2.44589 -11.57068,4.56742 -27.53349,5.34447 -40.05001,1.94959 z m 2.97745,-10.36285 c 2.64324,-2.64324 2.99887,-3.83124 2.42582,-8.10367 -0.81154,-6.05055 -4.27262,-9.23919 -10.02856,-9.23919 -5.66717,0 -10.03224,4.44679 -10.03224,10.22009 0,9.30047 11.01025,13.74751 17.63498,7.12277 z m 175.56746,0.483 c 3.75064,-3.52354 3.83594,-11.13923 0.16849,-15.04305 -6.07307,-6.4645 -16.6235,-1.85122 -16.6235,7.26878 0,9.33232 9.84528,13.98379 16.45501,7.77427 z M 205.65969,421.44642 c 6.69017,-5.75465 3.28666,-17.57213 -5.12979,-17.81143 -7.51454,-0.21365 -11.30833,3.34428 -11.30833,10.60526 0,8.93103 9.5604,13.12213 16.43812,7.20617 z m 152.54713,0.13163 c 2.3968,-2.06164 3.1932,-3.86776 3.1932,-7.24173 0,-8.47282 -4.83542,-12.30778 -12.86529,-10.20347 -4.73432,1.24068 -6.613,3.98358 -6.613,9.65505 0,9.18143 9.42573,13.69033 16.28509,7.79015 z M 170.39578,412.1685 c 5.83314,-2.65777 7.30301,-10.9792 2.85313,-16.15252 -5.62261,-6.53664 -17.69352,-2.39182 -17.69352,6.07549 0,8.60846 7.25355,13.53382 14.84039,10.07703 z m 221.47868,-1.61632 c 3.15192,-3.15191 3.9908,-9.6928 1.77428,-13.8344 -2.67479,-4.99788 -13.0054,-5.52764 -16.29193,-0.83546 -4.79791,6.84997 5.2e-4,17.62113 7.85,17.62113 2.34265,0 4.80732,-1.09092 6.66765,-2.95127 z M 209.78551,294.70966 c 7.64064,-3.32424 13.87954,-9.12002 17.61494,-16.36386 2.55119,-4.9474 3.16997,-7.8522 3.22928,-15.15991 0.13379,-16.48314 -8.89291,-29.75642 -25.62909,-37.68615 -7.3537,-3.48424 -8.93075,-3.77326 -20.58852,-3.77326 -11.39783,0 -13.22351,0.31582 -18.78495,3.24959 -27.82474,14.67809 -25.22722,52.54124 4.65227,67.81445 3.13848,1.60427 7.73752,3.43002 10.22009,4.05723 7.06413,1.78473 22.93225,0.62624 29.28598,-2.13809 z m 167.60594,-0.26303 c 10.03579,-3.84388 22.15058,-15.91615 25.31564,-25.2268 6.66989,-19.62075 -2.06236,-38.65215 -21.01196,-45.79423 -5.50285,-2.07404 -8.65307,-2.44196 -17.52968,-2.04739 -9.11461,0.40514 -12.08322,1.08791 -18.82279,4.32913 -10.10576,4.86009 -19.03899,14.29944 -22.69244,23.9781 -3.27958,8.68823 -2.86117,21.18287 0.95891,28.63413 2.55454,4.98279 9.82408,12.32965 14.89973,15.05821 10.10093,5.43005 26.33131,5.87621 38.88259,1.06885 z M 275.76999,228.35057 c 2.58053,-1.31649 6.17625,-4.33971 7.99046,-6.71828 2.92847,-3.83941 3.39949,-5.76309 4.19799,-17.14477 0.67238,-9.58376 1.82421,-15.40014 4.56273,-23.04022 4.14773,-11.5716 4.91932,-23.03192 1.93872,-28.79575 -2.64732,-5.11939 -11.03299,-11.75152 -17.62848,-13.94219 -3.20988,-1.06616 -12.19656,-2.40944 -19.9704,-2.98509 -7.77385,-0.57565 -16.02442,-1.61526 -18.3346,-2.31025 -2.31019,-0.69499 -6.18691,-1.26362 -8.61495,-1.26362 -3.72556,0 -5.15865,0.84526 -9.18144,5.41539 -10.16868,11.55223 -13.05018,27.87789 -7.16731,40.60769 3.1228,6.75737 17.03144,27.4471 26.77395,39.82746 9.11933,11.58848 24.30857,16.02506 35.43333,10.34963 z" id="path11">
                                        </path>
                                    </svg>
                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Animals</h3>
                                <p className="text-gray-500 dark:text-gray-400">The center of any rescue or shelter is the loving animals we save. With Paws Out, our primary goal is to make the process of caring for and adopting these animals as stress free as possible.</p>
                            </div>
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fillRule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z" clipRule="evenodd"/>
                                    </svg>

                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Tracking & Reports</h3>
                                <p className="text-gray-500 dark:text-gray-400">Quickly see if medications or monthly preventives are due and for which animals. Track and view weights of your animals in their dashboard. See upcoming visitations so that you can plan your time accordingly.</p>
                            </div>
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clipRule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>
                                <p className="text-gray-500 dark:text-gray-400">Automatically create Fosters, Volunteers, Adopters, etc from forms/applications that can be shared anywhere. Send email reminders to staff and volunteers about upcoming events, and much more.</p>
                            </div>
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clipRule="evenodd"></path></svg>
                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Medications</h3>
                                <p className="text-gray-500 dark:text-gray-400">Stay on top of your animals care by getting reminders of when medications or preventives are due. Have clear access to medications dosing and regimens in each dogs profile.</p>
                            </div>
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Microchips</h3>
                                <p className="text-gray-500 dark:text-gray-400">Use our integrated microchip look-up to easily investigate finding owners of pets that come into your facility with a chip.</p>
                            </div>
                            <div>
                                <div className="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                    <svg className="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clipRule="evenodd"></path></svg>
                                </div>
                                <h3 className="mb-2 text-xl font-bold dark:text-white">Breeds</h3>
                                <p className="text-gray-500 dark:text-gray-400">Pre-populated with over 170 different breeds of dogs. Easily select multi-breeds for an animal. Use our integrated Chip-n-Doodle Image Detection to help in identifying breeds. </p>
                            </div>
                        </div>
                    </div>
                </div>
                {/* End Feature Section */}

                {/* Contact Section */}
                <section className="bg-white dark:bg-gray-900" id="contact">
                    <div className="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <h2 className="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
                        <p className="mb-8 lg:mb-16 font-thin text-center text-gray-900 dark:text-gray-400 sm:text-xl">Would your organization like to get on our mailing list? Would you like to be a Beta Tester of the project, and gain access to all the features of Paws Out, for free during the Beta period? <span className="italic text-xs">Max: 3 organizations</span></p>
                        <form action="#" className="space-y-8">
                            <div>
                                <label htmlFor="email" className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                <input type="email" id="email" className="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@your-organization.com" required />
                            </div>
                            <div>
                                <label htmlFor="organization" className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Organization Name</label>
                                <input type="text" id="organization" className="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Whats the name of your organization?" required />
                            </div>
                            <div className="sm:col-span-2">
                                <label htmlFor="message" className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                <textarea id="message" rows="6" className="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tell us about your rescue or shelter and what you are looking for in a shelter or kennel management system?"></textarea>
                            </div>
                            <button type="submit" className="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                        </form>
                    </div>
                </section>
                {/* End Contact Section */}
            </div>
        <Footer />
        </>
    )
}
