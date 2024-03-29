@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="card intro-card">
            <div class="card-body">
                <p class="lead text-justify">Self taught full stack web and application developer with
                years of Linux experience and a desire to learn. Personal strengths include advanced
                troubleshooting and problem solving skills in real-world situations, the capacity to
                acquire and apply new knowledge quickly and the ability to work efficiently in a team
                centric environment.</p>
            </div>
        </div>

        <div class="card">

            <h2 class="card-title"><i class="fa fa-lightbulb-o fa-fw"></i> Qualifications</h2>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                        <br>

                        <ul class="list-inline qualifications-list">
                            <li class="label label-danger">PHP 5+</li>
                            <li class="label label-danger">HTML</li>
                            <li class="label label-danger">CSS</li>
                            <li class="label label-danger">Sass / SCSS</li>
                            <li class="label label-danger">JavaScript</li>
                            <li class="label label-danger">jQuery</li>
                            <li class="label label-danger">MySQL</li>
                            <li class="label label-danger">Postgres</li>
                            <li class="label label-primary">Nginx</li>
                            <li class="label label-primary">Apache</li>
                            <li class="label label-primary">Composer</li>
                            <li class="label label-primary">Git Version Control</li>
                            <li class="label label-primary">MVC Frameworks</li>
                            <li class="label label-primary">Laravel</li>
                            <li class="label label-primary">CakePHP</li>
                            <li class="label label-primary">Zend Framework</li>
                            <li class="label label-primary">Search Engine Optimization (SEO)</li>
                            <li class="label label-success">PC and server hardware</li>
                            <li class="label label-success">Networking</li>
                            <li class="label label-success">Linux operating systems</li>
                            <li class="label label-success">Windows operating systems</li>
                            <li class="label label-success">OpenStack</li>
                            <li class="label label-success">Heroku</li>
                            <li class="label label-success">Amazon Web Services (AWS)</li>
                            <li class="label label-warning">Docker</li>
                            <li class="label label-warning">Vagrant</li>
                            <li class="label label-warning">Packer</li>
                            <li class="label label-warning">SaltStack</li>
                            <li class="label label-warning">Travis CI</li>
                            <li class="label label-warning">Bamboo</li>
                            <li class="label label-warning">Jenkins</li>
                            <li class="label label-info">Wordpress</li>
                            <li class="label label-info">Drupal</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>


        <div class="card">

            <h2 class="card-title"><i class="fa fa-briefcase fa-fw"></i> Experience</h2>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                        <h3>
                            <strong>Software Development Engineer</strong> @ IO Data Center
                            <br><small>August 2015 - Present &bull; Scottsdale, Arizona</small>
                        </h3>

                        <ul>

                            <li>Planned, designed and developed second iteration of the PHP based
                            customer authentication and management portal built on the Laravel MVC
                            framework.</li>

                            <li>Consumed <a href="https://www.okta.com/">Okta</a> REST API to implement
                            authentication and authorization and identity management within a
                            custom-built customer web portal.</li>

                        </ul>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <h3>
                            <strong>Cloud Engineer</strong> @ IO Data Center
                            <br><small>June 2014 - August 2015 &bull; Scottsdale, Arizona</small>
                        </h3>

                        <ul>

                            <li>Automated the continuous deployment of Arch Linux-backed, OpenStack
                            instances via SaltStack.</li>

                            <li>Built Arch Linux images with Packer for PXE booting cloud servers and
                            infrastructure.</li>

                            <li>Deployed Elasticsearch, Logstash and Kibana monitoring platform in a
                            Docker-backed, containerized environment.</li>

                            <li>Deployed Consul scripts written in Python for monitoring service usage
                            and alerting on service warnings/failure.</li>

                            <li>Locally built and tested cloud instances in Vagrant test environments.</li>

                        </ul>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <h3>
                            <strong>Web Application Developer</strong> @ Arizona State University
                            <br><small>April 2011 - June 2014 &bull; Tempe, Arizona</small>
                        </h3>

                        <ul>

                            <li>Designed and developed a new iteration of the PHP based learning
                            management system built on the CakePHP MVC framework.</li>

                            <li>Rearchitected a normalized MySQL database from existing fragmented
                            database structure.</li>

                            <li>Designed a detailed site frontend written in HTML, CSS and jQuery/JavaScript.</li>

                        </ul>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <h3>
                            <strong>Web Developer / Designer</strong> @ Southwest Medical &amp; Rehab
                            <br><small>March 2009 - April 2011 &bull; Phoenix, Arizona</small>
                        </h3>

                        <ul>

                            <li>Worked alongside senior developer to conceptualize, design, and deploy a
                            custom PHP based e-commerce platform built on Zend Framework.</li>

                            <li>Designed and implemented multiple detailed site layouts written in HTML,
                            CSS and jQuery/JavaScript.</li>

                            <li>Built out a highly available infrastructure for hosting of the e-commerce platform.</li>

                            <li>Increased traffic to all sites via email campaigns and search engine optimizations.</li>

                        </ul>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <h3>
                            <strong>Solution Center Technician</strong> @ PetSmart Store Support Group
                            <br><small>February 2008 - March 2009 &bull; Phoenix, Arizona</small>
                        </h3>

                        <ul>

                            <li>Provided over-the-phone technical support to store and corporate employees.</li>

                            <li>Performed advanced troubleshooting on Windows based store servers,
                            registers, and workstations.</li>

                        </ul>

                    </div>
                </div>

                <?php /* <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            Jannenga Enterprises, LLC<br>
                            <small>Web and Graphics Designer (May 2006 - October 2007)</small>
                        </h3>
                        <ul>
                            <li>Conceptualized, designed and coordinated the implementation of detailed web pages and graphics.</li>
                            <li>Performed routine and advanced maintenance on PC systems, networks, and other digital equipment.</li>
                        </ul>

                    </div>

                </div> */ ?>

            </div>

        </div>


        <div class="card">

            <h2 class="card-title"><i class="fa fa-book fa-fw"></i> Education</h2>

            <div class="card-body">

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <h3>DeVry University<br><small>July 2005 - February 2008</small></h3>
                        <ul>
                            <li>Bachelor's of Science Degree in Network and Communication Management</li>
                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6">

                        <h3>Shadow Mountain High School<br><small>Class of 2005</small></h3>
                        <ul>
                            <li>Received high school diploma</li>
                            <li>Graduated National Honor Society member</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>


        <div class="card">

            <h2 class="card-title"><i class="fa fa-coffee fa-fw"></i> Personal Projects</h2>

            <div class="card-body">

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="http://www.directorylister.com">Directory Lister</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>

                        <ul>
                            <li>A simple PHP app for listing the contents of any web-accessible directory and allowing navigation within.</li>
                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="http://www.ubergallery.net">UberGallery</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>
                        <ul>
                            <li>An easy to use, simple to manage, web photo gallery written in PHP.</li>
                        </ul>

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="https://github.com/PHLAK/strgen">StrGen</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>

                        <ul>
                            <li>PHP library for generating securely random strings (e.g. - passwords or salts).</li>
                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="https://github.com/PHLAK/colorizer">Colorizer</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>

                        <ul>
                            <li>PHP library for generating persistently unique colors from a string.</li>
                        </ul>

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="http://phlak.github.io/jColorClock">jColorClock</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>

                        <ul>
                            <li>Color changing clock based on the time of day, implemented in JavaScript.</li>
                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6">

                        <h3>
                            <a href="https://github.com/PHLAK/PyBlackjack">PyBlackjack</a>
                            <small><i class="fa fa-external-link"></i></small>
                        </h3>

                        <ul>
                            <li>Play Blackjack on the command line.  Written in object-oriented Python.</li>
                        </ul>

                    </div>

                </div>

                <hr>

                <center>
                    <p>More projects and coding examples available on <a href="https://github.com/PHLAK">GitHub</a>.</p>
                </center>

            </div>

        </div>


        <div class="card">

            <h2 class="card-title"><i class="fa fa-asterisk fa-fw"></i> Miscellaneous</h2>

            <div class="card-body">

                <br>

                 <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <ul>
                            <li>Award: Eagle Scout</li>
                            <li>Active <a href="https://www.phx2600.org">PHX2600</a> Member and volunteer web master</li>
                        </ul>

                    </div>

                     <div class="col-sm-12 col-md-6">

                        <ul>
                            <li>Regular attendee at <a href="http://defcon.org/">DEF CON</a> security convention</li>
                            <li>Attended CakeFest 2013</li>
                        </ul>

                     </div>

                 </div>

            </div>

        </div>

        <div class="card map-card hidden-xs">

            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

            <script type="text/javascript">

                function getGeocode(address) {

                    // Initialize location object
                    var location = new Object();

                    // Initialize geocoder object
                    var geocoder = new google.maps.Geocoder();

                    geocoder.geocode({ 'address': address }, function(results, status) {

                        if (status == google.maps.GeocoderStatus.OK) {

                            location['lat'] = results[0].geometry.location.lat();
                            location['lng'] = results[0].geometry.location.lng();

                        }

                    });

                    return location;

                }

                // Get location info for Phoenix, AZ
                var geo = getGeocode('Mesa, AZ');

                // Initialize the Google map on load
                google.maps.event.addDomListener(window, 'load', function() {

                    // Initialize the Google map
                    map = new google.maps.Map(document.getElementById('map-canvas'), {
                        center: new google.maps.LatLng(geo.lat + 0.0196729, geo.lng),
                        zoom: 10,
                        disableDefaultUI: true,
                        scrollwheel: false,
                        zoomControl: true
                    });

                    // Place a marker
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(geo.lat, geo.lng),
                        map: map,
                        draggable: false
                    });

                });

            </script>

            <div id="map-canvas"></div>

        </div>

    </div>

@endsection
