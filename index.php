

<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="css/t6-style.css" rel="stylesheet">
        <link href="css/star-rating.css" rel="stylesheet">
        <link rel="stylesheet" href="css/intlTelInput.min.css">
        <script src="https://connect.facebook.net/en_US/sdk.js?hash=9fd289b669a723c54e0d115f45a6f418&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v5.0"></script>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
        <meta property="og:image" itemprop="image" content="https://vcard-bucket.s3.us-east-2.amazonaws.com/A26/27/1597067274077.jpeg">
        <meta property="og:type" content="website">
        <meta property="og:description" content=" Nitin Tawade " />
        <title>Daksha Enterprises</title>
        <link rel="manifest" id="manifest-placeholder">
        <script>
            var dynamicManifest = {
                "name": "AI Creation",
                "short_name": "AI Creation",
                "description": "AI Creation",
                "start_url": "http://uniquecards.in/ai-creation",
                "background_color": "#000000",
                "theme_color": "#0f4a73",
                "icons": [{
                    "src": "https://vcard-bucket.s3.us-east-2.amazonaws.com/A26/27/1597067274077.jpeg",
                    "sizes": "256x256",
                    "type": "image/png"
                }],
                "display": "standalone"
            }
            const stringManifest = JSON.stringify(dynamicManifest);
            const blob = new Blob([stringManifest], {type: 'application/json'});
            const manifestURL = URL.createObjectURL(blob);
            document.querySelector('#manifest-placeholder').setAttribute('href', manifestURL);
        </script>
        <script>
            function ColorLuminance(hex, lum) {
                // validate hex string
                hex = String(hex).replace(/[^0-9a-f]/gi, '');
                if (hex.length < 6) {
                    hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
                }
                lum = lum || 0;

                // convert to decimal and change luminosity
                var rgb = "#", c, i;
                for (i = 0; i < 3; i++) {
                    c = parseInt(hex.substr(i*2,2), 16);
                    c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                    rgb += ("00"+c).substr(c.length);
                }

                return rgb;
            }
            document.documentElement.style.setProperty('--theme-color', '#D84913');
            document.documentElement.style.setProperty('--theme-color-light', '#D84913');
            document.documentElement.style.setProperty('--theme-color-100', '#D84913');
            document.documentElement.style.setProperty('--theme-color-75', '#D84913');
            document.documentElement.style.setProperty('--theme-color-50', '#D84913');
            document.documentElement.style.setProperty('--theme-color-25', '#D84913');
        </script>
    </head>
    <body>
        <div class="page-wrapper" id="home-section">
            <div class="separator"></div>
            
            <div class="upper">
                <!-- User Profile Pic -->
                <img src="profile.jpeg" class="profile-pic-img">
                <!-- User Company Name -->
                <div class="firmname">Daksha Enterprises PVT LTD</div>
                <div class="firmname-underline"></div>
                <!-- User First Name and Last Name -->
                <div class="name"> Suresh Jain </div>
                <div class="name"> Daksha Jain </div>
                
                <div class="contact-buttons">
                    <a class="contact-button" href="tel:8007699551">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                        <!-- Call -->
                    </a>
                    <a class="contact-button" target="_blank" href="https://wa.me/918007699551?text=Got reference from your Digital vCard. Want to know more about your products and services.">
                        <i class="fab fa-whatsapp"></i>
                        <!-- Whatsapp -->
                    </a>
                    <a class="contact-button" target="_blank" href="https://www.google.com/maps/search/132,+Poornima+Towers,397,Shankar+Sheth+Road,Near+L.P.G.+Petrol+Pump,Pune-37./@18.4999053,73.8629423,17z/data=!3m1!4b1" >
                        <i class="fas fa-map-marker-alt fa-flip-horizontal"></i>
                        <!-- Direction -->
                    </a>
                    <a class="contact-button" target="_blank" href="mailto:dakshaenterprises5@gmail.com">
                        <i class="fas fa-envelope fa-flip-horizontal"></i>
                        <!-- Mail -->
                    </a>
                </div>
            </div>
            <div class="lower">
                <div class="contact-info-container">
                    <div class="contact-info-wrapper">
                        <a class="contact-piller-button call" target="_blank" href="tel:8007699551">
                            <i class="fas fa-phone fa-flip-horizontal"></i>
                        </a>
                        <div class="contact-info">
                            <div style="margin-bottom: 5px;"><a target="_blank" href="tel:8007699551">+918007699551</a></div>
                            <div><a target="_blank" href="tel:8390392323">+918390392323</a></div>
                        </div>
                    </div>
                    
                    <div class="contact-info-wrapper">
                        <a class="contact-piller-button" target="_blank" href="mailto:dakshaenterprises5@gmail.com">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <div class="contact-info">
                            <a target="_blank" href="mailto:dakshaenterprises5@gmail.com">dakshaenterprises5@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-info-wrapper">
                        <a class="contact-piller-button" target="_blank" >
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <div class="contact-info">
                            <a target="_blank" >132, Poornima Towers,397,Shankarseth Road,Near L.P.G. Petrol Pump,Pune-37.</a>
                        </div>
                    </div>
                </div>
                <div style="padding: 15px;">
                   
                    <div class="shadow-buttons">
                        <a class="shadow-button" href="tel:5558920234" download="" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">Click to Call  <i class="fas fa-phone shadow-button-icon"></i></p></a>
                        
                    </div>
                    
                    <div class="p-30"></div>
                    <ul class="inprofile share-buttons">
                        <li class="share-button">
                                <a target="_blank" href="https://www.facebook.com/daksha.jain.3591"><i class="share-button-facebook fab fa-facebook-f"></i></a>
                            </li>
                        
                        <li class="share-button">
                                <a target="_blank" href="https://www.instagram.com/invites/contact/?i=1v3sa0gfam7ad&utm_content=hyzz8mz"><i class="share-button-instagram fab fa-instagram"></i></a>
                            </li>
                        
                        
                        
                        
                    </ul>
                    <div class="p-20"></div>
                </div>
                <div class="bottom-separator"></div>
            </div>
        </div>
        
        <div class="section-container" id="about-us-section">
            <div class="separator"></div>
            <div class="section-content-wrapper">
                <h2 class="section-header">About Us</h2>
                <div class="section-header-underline"></div>
                <table class="about-us-table">
                    <tbody>
                        <tr>
                            <td class="table-row-label">
                                <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                            <td>
                            <td class="table-row-value">
                                Daksha Enterprises PVT LTD
                            
                            <td>
                        </tr>
                        
                        
                        <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Nature of Business</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    Furniture
                                <td>
                            </tr>
                    </tbody>
                </table>
                <h3 class="speciality-label">Our Specialities</h3>
                    <ul class="unorderedList">
                        
                                <li>Office Series</li>
                                
                                <li>Waiting Area</li>
                                
                                <li>Cafe Series</li>
                                
                                <li>Education Series</li>
                                
                                <li>Outdoor Furniture</li>
                                
                                <li>indoor Furniture</li>
                                
                    </ul>
                <div class="about-us-text"><p> Daksha Enterprise today is a benchmark in comfort in many towns across the country over a span of two decades.</p><p>Sherly owing to excellent craftsmanship,elegant looks and enduring quality that is acclaimed by many to notch architects.</p><p>The company with its insight into public taste and popular trends, coupled with the paasion for turning out futuristic design and patterns.</p><p><strong></strong> </p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p><i></i></p><p></i></p><p><i></i></p><p><i></i></p></div>
                <h3 class="speciality-label">Documents</h3>
                    
                            <a class="document-wrapper" href="catalog.pdf" download>
                                <div class="pdf-icon"><i class="fa fa-file-pdf"></i></div>
                                <div class="pdf-number">Catalog.pdf</div>
                                <div class="download-icon"><i class="fa fa-download"></i></div>
                            </a>
                            
                    
                
            </div>
            <div class="bottom-separator"></div>
        </div>
        <div class="section-container" id="products-services-section">
                <div class="separator"></div>
                <div class="section-content-wrapper">
                    <h2 class="section-header">Our Services</h2>
                    <div class="section-header-underline"></div>
                    <div>
                        <div class="card">
                            <h3 class="card-title">Office Series</h3>
                            
                            <img onclick="openImageModal(this)" alt="Office Series" src="images/os1.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product:Office Series . Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>
                        <div class="card">
                            <h3 class="card-title">Waiting Area</h3>
                            
                            <img onclick="openImageModal(this)" alt="Waiting Area" src="images/os2.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product: Waiting Area. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>
                        <div class="card">
                            <h3 class="card-title">Cafe Series</h3>
                            
                            <img onclick="openImageModal(this)" alt="Cafe Series" src="images/os3.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product: Cafe Series. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>
                        <div class="card">
                            <h3 class="card-title">Education Series</h3>
                            
                            <img onclick="openImageModal(this)" alt="Education Series" src="images/os4.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product: Education Series. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>

                        <div class="card">
                            <h3 class="card-title">Outdoor Furniture</h3>
                            
                            <img onclick="openImageModal(this)" alt="Outdoor Furniture" src="images/os5.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product: Outdoor Furniture. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>
                        
                        <div class="card">
                            <h3 class="card-title">Indoor Furniture</h3>
                            
                            <img onclick="openImageModal(this)" alt="Indoor Furniture" src="images/os6.png" style="width:100%;margin-bottom: 15px;">
                            <div class="product-enquiry-section">
        <div class="product-price">
        
        </div>
        <a href="https://wa.me/919773643383?text=Hi, I am interested in your product: Indoor Furniture. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
    </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="bottom-separator"></div>
            </div>
        
        <div class="section-container" id="gallery-section">
                <div class="separator"></div>
                <div class="section-content-wrapper">
                <h2 class="section-header">Gallery</h2>
                    <div class="section-header-underline"></div>
                    <div class="images-container">
                    <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="images/g1.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 2" src="images/g5.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 3" src="images/g3.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 4" src="images/g4.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 5" src="images/g2.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 6" src="images/g6.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 7" src="images/g7.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 8" src="images/g8.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 9" src="images/g9.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 10" src="images/g10.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 11" src="images/g11.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 12" src="images/g12.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 13" src="images/g13.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 14" src="images/g14.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 15" src="images/g15.jpeg" style="width:100%">
                        </div>
                        <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 16" src="images/g16.jpeg" style="width:100%">
                        </div>
                        
                    </div>
                </div>
                <div class="bottom-separator"></div>
            </div>
        
        <div class="section-container" id="feedback-section">
                <div class="separator"></div>
                <div class="section-content-wrapper">
                    <h2 class="section-header">Feedbacks</h2>
                    <div class="section-header-underline"></div>
                    <div class="feedback-list">
                        <div class="feedback-wrapper">
                                <span class="feedback-name-wrapper"><span class="feedback-name">Bhagyashree vaidya</span> on August 11, 2020 </span>
                                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                                <div>Excellent job Daksha Enterprises... delivered more than my expectation </div>
                                <hr />
                            </div><div class="feedback-wrapper">
                                <span class="feedback-name-wrapper"><span class="feedback-name">Dheeraj Dapse </span> on July 21, 2019 </span>
                                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                                <div>The services provided by the officials was smooth and satisfactory. Products and goods delivered were up to satisfaction… and compared to market price.The services provided by the officials was smooth and satisfactory. Products and goods delivered were up to satisfaction… and compared to market price. 
</div>
                                <hr />
                            </div><div class="feedback-wrapper">
                                <span class="feedback-name-wrapper"><span class="feedback-name">Mayur narvekar</span> on Jan 11, 2020 </span>
                                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                                <div>Excellent</div>
                                <hr />
                            </div><div class="feedback-wrapper">
                                <span class="feedback-name-wrapper"><span class="feedback-name">Dipti parab</span> on March 25, 2018 </span>
                                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                                <div>Awesome.. ❤ excellent service and good quality. </div>
                                <hr />
                            </div><div class="feedback-wrapper">
                                <span class="feedback-name-wrapper"><span class="feedback-name">Shilpa mishra</span> on August 10, 2020 </span>
                                <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                                <div>My favourite piece of furniture from daksha enterprises is my Sofa. Definitely recommending Daksha Enterprises to my friends and family. Their comfort and quality is what keeps bringing me back. 😊👍🏻</div>
                                <hr />
                            </div>
                    </div>
                    <form class="feedback-form card" action="" method="POST">
                        <div class="feedback-form-heading">Give Feedback</div>
                        <select class="star-rating" id="rating" name="rating">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4">Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                        </select>
                        <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name" required data error="Please Enter yout name"/>
                        <textarea name="feedback" id="feedback" placeholder="Enter your feedback" data error="Write your message"></textarea>
                        <!-- Message:<br/> -->
                        <center>
                        <input type="submit" class="btn btn-common" id="submit" name="submit" value="Give Feedback" />
        </center>
                    </form>
                </div>
                <div class="bottom-separator"></div>
            </div>
        <div class="section-container" id="enquiry-section">
                <div class="separator"></div>
                <div class="section-content-wrapper">
                <h2 class="section-header">Enquiry Form</h2>
                    <div class="section-header-underline"></div>
                    <form method="POST" class="feedback-form card" >
                        <!-- Full Name:<br/> -->
                        <input type="text" name="name" id="enquiryName" placeholder="Enter Full Name"/><br/>
                        <div class="flex">
                            <div class="enquiry-phoneNumber">
                                <!-- Phone Number:<br/> -->
                                <input type="text" name="phone" id="phoneNumber" placeholder="Enter Phone Number"/><br/>
                            </div>
                            <div class="enquiry-email">
                                <!-- Email:<br/> -->
                                <input type="text" name="email" id="email" placeholder="Enter Email"/><br/>
                            </div>
                        </div>
                        <!-- Message:<br/> -->
                        <textarea name="message" id="message" placeholder="Enter Message"></textarea><br/>
                        <center>
                        <input type="submit" value="Submit" name="submit2" onclick="sendEnquiry(this, 'dakshaenterprises5@gmail.com')"/>
        </center>
                    </form>
                </div>
                <div class="bottom-separator"></div>
            </div>
        <div class="copyright-wrapper">
            <div class="copyright-wrapper-inner">
                © 2021 <a href="http://uniquecards.in" target="_blank"><b>Radiant Web Team</b></a>
            </div>
        </div>
        <!-- Footer Menu -->
        <div class="footer">
            <ul class="footer-menu">
                <li>
                    <a class="footer-menu-link" href="#home-section">
                        <i class="footer-menu-icon fas fa-home"></i>
                        <div class="footer-menu-text">HOME</div>
                    </a>
                </li>
                <li>
                        <a class="footer-menu-link" href="#about-us-section">
                            <i class="footer-menu-icon fas fa-briefcase"></i>
                        <div class="footer-menu-text">ABOUT US</div>
                        </a>
                    </li>
                <li>
                        <a class="footer-menu-link" href="#products-services-section">
                            <i class="footer-menu-icon fas fa-box-open"></i>
                        <div class="footer-menu-text">PRODUCTS</div>
                        </a>
                    </li>
                
                <li>
                        <a class="footer-menu-link" href="#gallery-section">
                            <i class="footer-menu-icon fas fa-file-image"></i>
                            <div class="footer-menu-text">GALLERY</div>
                        </a>
                    </li>
                
                <li>
                        <a class="footer-menu-link" href="#feedback-section">
                            <i class="footer-menu-icon fas fa-star"></i>
                            <div class="footer-menu-text">FEEDBACK</div>
                        </a>
                    </li>
                <li>
                        <a class="footer-menu-link" href="#enquiry-section">
                            <i class="footer-menu-icon fas fa-comment-alt"></i>
                            <div class="footer-menu-text">ENQUIRY</div>
                        </a>
                    </li>
            </ul>
        </div>
        <!-- The image Modal -->
        <div id="imageModal" class="modal">
            <span class="close" id="imageModalClose">&times;</span>
            <img class="modal-content fadeIn" id="img01">
            <div id="caption"></div>
        </div>
        <!-- The share Modal -->
        <div id="shareModal" class="modal share-modal">
            <div class="share-form fadeInUpBig">
                <div class="share-form-header">
                    <h3 class="share-form-header-text">Share Profile</h3>
                    <span class="close" id="shareModalClose">&times;</span>
                </div>
                <div class="share-form-buttons-container">
                    <p>Share my Digital vCard in your network.</p>
                    <div class="share-buttons-heading">
                        <img src="../templates/template5/tild-arrow.svg" class="share-buttons-arrow">
                        <div class="share-buttons-heading-text">Share my Digital vCard</div>
                    </div>
                    <ul class="share-buttons">
                        <li class="share-button">
                        <a href="javascript:;" target="_blank" onclick="handleDirectWhatsappShare(this, 9773643383)">
                                <i class="share-button-whatsapp fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="share-button">
                            <a target="_blank" href="sms:?body=http://uniquecards.in/ai-creation">
                                <i class="share-button-sms fas fa-comment-dots"></i>
                            </a>
                        </li>
                        <li class="share-button">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://uniquecards.in/ai-creation&src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                <i class="share-button-facebook fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="share-button">
                            <a target="_blank" href="https://twitter.com/intent/tweet?text=http://uniquecards.in/ai-creation" data-size="large">
                                <i class="share-button-twitter fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="share-button">
                            <a target="_blank" href="http://pinterest.com/pin/create/link/?url=http://uniquecards.in/ai-creation">
                                <i class="share-button-pinterest fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li class="share-button">
                            <a target="_blank" href="mailto:?subject=Digital Card&amp;body=Check out this digital card http://uniquecards.in/ai-creation.">
                                <i class="share-button-mail fas fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
        <script src="../templates/common/js/star-rating.js"></script>
        <script src="../templates/common/js/script.js"></script>
    </body>
</html>
 
<!--PhP Starts here................................-->
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname='daksha';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   error_reporting(0);
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   echo "";

   /*if ($mysqli -> select_db('Celebration') === false) {
      $sql = 'CREATE Database Celebration';
   $retval = mysqli_query( $conn,$sql );
      
      if( $retval ) {
          
   echo "Database test_db created successfully\n";
         
      }
      else{
         die('Could not create database OR I May already exist  check Database ' . mysqli_error());
      }
  }
   */


  if( $_POST['submit']  )
  {
   $rating=$_POST['rating'];
   $feedbackName=$_POST['feedbackName'];
   $feedback=$_POST['feedback'];
  
   
  
   

echo$un.$rating.$feedbackName.$feedback;

     if($rating!="" && $feedbackName!="" && $feedback!="" )
     {  
      
        $query2="Insert into feedback values('$rating','$feedbackName','$feedback')";
        $data=mysqli_query($conn,$query2);
        if($data)
        {
           # header('location:login.php');
           echo '<script>alert(" Request Sent, Wait for our call..")</script>'; 
        }


     }else{echo"All fields are Required...";}


	}

   if($_POST['submit2'])
   {
	$enquiryName=$_POST['name'];
	$phoneNumber=$_POST['phone'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	echo$enquiryName."  ".$phoneNumber." ".$email." ".$message;
	if( $enquiryName!="" && $phoneNumber!="" && $email!="" && $message!="")
	{  
	 
	   $query2="Insert into enquiry values('$enquiryName','$phoneNumber','$email','$message')";
	   $data=mysqli_query($conn,$query2);
	   if($data)
	   {
		  # header('location:login.php');
		  echo '<script>alert("Message Sent... to  the Manager")</script>'; 
	   }


	}else{echo"All fields are Required...";}


   }









?>