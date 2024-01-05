@extends('admin.layout.layout-user')
@section('content')
    <section class="banner">
        <div class="banner-holder">
            <div class="banner-slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_01_zmpwll.jpg">
                    </div>
                    <div class="item">
                        <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_03_h1u4cj.jpg">
                    </div>
                    <div class="item">
                        <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703979/slider_02_kufdql.jpg">
                    </div>
                    <div class="item">
                        <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_04_jg0ouv.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-cta-holder">
            <div class="container">
                <div class="banner-cta-row">
                    <div class="banner-cta">
                        <div class="banner-cta-text">
                            <h1>Lets Book Your Taxi Instantly</h1>
                            <p>Book Your Taxi for Umrah on time. Umrah Taxi(تاكسي العمرة المميز ) service is ready to help
                                you in your Holy Journey. We provide the best Mecca to Medina taxi service. </p>
                            <div class="banner-cta-btn">
                                <a href="/taxi" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                        <div class="banner-testimonials">
                            <div class="row">
                                <div id="banner-slider" class="owl-carousel">
                                    <div class="testimonial">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate
                                            nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet
                                            lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget
                                            arcu congue dictum.
                                        </p>
                                        <h3 class="title">WILLIAMSON</h3>
                                    </div>
                                    <div class="testimonial">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate
                                            nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet
                                            lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget
                                            arcu congue dictum.
                                        </p>
                                        <h3 class="title">WILLIAMSON</h3>
                                    </div>
                                    <div class="testimonial">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate
                                            nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet
                                            lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget
                                            arcu congue dictum.
                                        </p>
                                        <h3 class="title">WILLIAMSON</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-form">
                        <form id="bookTaxi" action=" {{ route('store_enquiry') }}" method="POST"
                            enctype="multipart/form-data">
                            <h2>Submit Your Enquiry</h2>
                            @csrf
                            <div class="form-inner">
                                <div class="form_column">
                                    <input type="text" name="name" placeholder="Name" required>
                                    <input type="email" required name="email"placeholder="Email">
                                    <input type="text" id="phone"required name="ph_nmbr" placeholder="Phone Number">
                                    <!-- <input type="text" name="countryname" placeholder="Country Name"> -->
                                    <select id="country" name="countryname" required>
                                        <option>Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                                        <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo - Brazzaville</option>
                                        <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curacao">Curaçao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czechia</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)
                                        </option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Vatican City</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">North Korea</option>
                                        <option value="Korea, Republic of">South Korea</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia</option>
                                        <option value="Moldova, Republic of">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar (Burma)</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Curaçao</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn Islands</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Réunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthelemy">St. Barthélemy</option>
                                        <option value="Saint Helena">St. Helena</option>
                                        <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                                        <option value="Saint Lucia">St. Lucia</option>
                                        <option value="Saint Martin">St. Martin</option>
                                        <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten">Sint Maarten</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia & South
                                            Sandwich Islands</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                                        <option value="Swaziland">Eswatini</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syria</option>
                                        <option value="Taiwan, Province of China">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Vietnam</option>
                                        <option value="Virgin Islands, British">British Virgin Islands</option>
                                        <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                                        <option value="Wallis and Futuna">Wallis & Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <select name="british_citizen" required>
                                        <option value="">Are you British Citizen?</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form_column">
                                    <h3>Services We Offer:</h3>
                                    <div class="firstpkg">
                                        <input type="checkbox" id="formTaxi" name="formTaxi" value="need taxi">
                                        <label for="formTaxi"> Taxi</label>
                                        <input type="checkbox" id="formHotels" name="formHotels" value="need hotel">
                                        <label for="formHotels"> Hotels </label>
                                        <input type="checkbox" id="forTickets" name="forTickets" value="need ticket">
                                        <label for="forTickets"> Tickets</label>
                                    </div>
                                    <div class="secondpkg">
                                        <input type="checkbox" id="umrahpkg" name="umrahpkg"
                                            value="need umrah package">
                                        <label for="umrahpkg"> Umrah Package (All in one)</label>
                                    </div>
                                    <!-- <input type="text" name="pickup_addr" placeholder="Pick up Address"> -->
                                    <select id="single" class="single-dropdown" name="pickup_addr" required>
                                        <option value=""></option>
                                        <option value="Al Kiswah Towers Hotel">Al Kiswah Towers Hotel</option>
                                        <option value="Makkah Towers">Makkah Towers</option>
                                        <option value="Hotel Pullman ZamZam Makkah">Hotel Pullman ZamZam Makkah</option>
                                        <option value="Jabal Omar Marriott Hotel">Jabal Omar Marriott Hotel</option>
                                        <option value="Makkah">Makkah</option>
                                        <option value="Novotel Makkah Thaker City">Novotel Makkah Thaker City</option>
                                        <option value="Hilton Makkah Convention Hotel">Hilton Makkah Convention Hotel
                                        </option>
                                        <option value="M Hotel Al Dana Makkah by Millennium">M Hotel Al Dana Makkah by
                                            Millennium</option>
                                        <option value="Swissôtel Makkah">Swissôtel Makkah</option>
                                        <option value="Fairmont Makkah Clock Royal Tower">Fairmont Makkah Clock Royal Tower
                                        </option>
                                        <option value="Conrad Makkah">Conrad Makkah</option>
                                        <option value="Park Inn by Radisson">Park Inn by Radisson</option>
                                        <option value="Makkah Al Naseem">Makkah Al Naseem</option>
                                        <option value="DoubleTree by Hilton Makkah Jabal Omar">DoubleTree by Hilton Makkah
                                            Jabal Omar</option>
                                        <option value="Four Points by Sheraton Makkah Al Naseem">Four Points by Sheraton
                                            Makkah Al Naseem</option>
                                        <option value="Revan Hotel">Revan Hotel</option>
                                        <option value="Hilton Suites Makkah">Hilton Suites Makkah</option>
                                        <option value="Royal Al Mashaer Hotel">Royal Al Mashaer Hotel</option>
                                        <option value="Makkah Hotel">Makkah Hotel</option>
                                        <option value="Millennium Makkah Al Naseem">Millennium Makkah Al Naseem</option>
                                        <option value="Elaf Bakkah Hotel">Elaf Bakkah Hotel</option>
                                        <option value="Swissôtel Al Maqam Makkah">Swissôtel Al Maqam Makkah</option>
                                        <option value="King Abdulaziz International Airport">King Abdulaziz International
                                            Airport</option>
                                        <option value="King Khaled International Airport">King Khaled International Airport
                                        </option>
                                        <option value="King Fahd International Airport">King Fahd International Airport
                                        </option>
                                        <option value="Prince Mohammad Bin Abdulaziz Airport">Prince Mohammad Bin Abdulaziz
                                            Airport</option>
                                        <option value="Gassim Airport">Gassim Airport</option>
                                        <option value="Ta’if Regional Airport">Ta’if Regional Airport</option>
                                        <option value="Prince Abdulmohsin Bin Abdulaziz Airport">Prince Abdulmohsin Bin
                                            Abdulaziz Airport</option>
                                        <option value="Abha Regional Airport">Abha Regional Airport</option>
                                        <option value="Tabuk Airport">Tabuk Airport</option>
                                        <option value="Ha'il Airport">Ha'il Airport</option>
                                        <option value="Al Ahsa Airport">Al Ahsa Airport</option>
                                        <option value="Jizan Regional Airport">Jizan Regional Airport</option>
                                        <option value="Al Baha Airport">Al Baha Airport</option>
                                        <option value="Bisha Airport">Bisha Airport</option>
                                        <option value="Gurayat Domestic Airport">Gurayat Domestic Airport</option>
                                        <option value="Nejran Airport">Nejran Airport</option>
                                        <option value="Al Qaisumah/Hafr Al Batin Airport">Al Qaisumah/Hafr Al Batin Airport
                                        </option>
                                        <option value="Rafha Domestic Airport">Rafha Domestic Airport</option>
                                        <option value="Arar Domestic Airport">Arar Domestic Airport</option>
                                        <option value="Sharurah Airport">Sharurah Airport</option>
                                        <option value="Al-Jawf Domestic Airport">Al-Jawf Domestic Airport</option>
                                        <option value="Turaif Domestic Airport">Turaif Domestic Airport</option>
                                        <option value="Wadi Al Dawasir Airport">Wadi Al Dawasir Airport</option>
                                        <option value="Al Wajh Domestic Airport">Al Wajh Domestic Airport</option>
                                        <option value="King Salman Abdulaziz Airport">King Salman Abdulaziz Airport
                                        </option>
                                        <option value="King Khaled Military City Airport">King Khaled Military City Airport
                                        </option>
                                    </select>
                                    <!-- <input type="text" name="destination" placeholder="Destination"> -->
                                    <select id="single_02" class="single-dropdown" name="destination" require>
                                        <option value=""></option>
                                        <option value="Al Kiswah Towers Hotel">Al Kiswah Towers Hotel</option>
                                        <option value="Makkah Towers">Makkah Towers</option>
                                        <option value="Hotel Pullman ZamZam Makkah">Hotel Pullman ZamZam Makkah</option>
                                        <option value="Jabal Omar Marriott Hotel">Jabal Omar Marriott Hotel</option>
                                        <option value="Makkah">Makkah</option>
                                        <option value="Novotel Makkah Thaker City">Novotel Makkah Thaker City</option>
                                        <option value="Hilton Makkah Convention Hotel">Hilton Makkah Convention Hotel
                                        </option>
                                        <option value="M Hotel Al Dana Makkah by Millennium">M Hotel Al Dana Makkah by
                                            Millennium</option>
                                        <option value="Swissôtel Makkah">Swissôtel Makkah</option>
                                        <option value="Fairmont Makkah Clock Royal Tower">Fairmont Makkah Clock Royal Tower
                                        </option>
                                        <option value="Conrad Makkah">Conrad Makkah</option>
                                        <option value="Park Inn by Radisson">Park Inn by Radisson</option>
                                        <option value="Makkah Al Naseem">Makkah Al Naseem</option>
                                        <option value="DoubleTree by Hilton Makkah Jabal Omar">DoubleTree by Hilton Makkah
                                            Jabal Omar</option>
                                        <option value="Four Points by Sheraton Makkah Al Naseem">Four Points by Sheraton
                                            Makkah Al Naseem</option>
                                        <option value="Revan Hotel">Revan Hotel</option>
                                        <option value="Hilton Suites Makkah">Hilton Suites Makkah</option>
                                        <option value="Royal Al Mashaer Hotel">Royal Al Mashaer Hotel</option>
                                        <option value="Makkah Hotel">Makkah Hotel</option>
                                        <option value="Millennium Makkah Al Naseem">Millennium Makkah Al Naseem</option>
                                        <option value="Elaf Bakkah Hotel">Elaf Bakkah Hotel</option>
                                        <option value="Swissôtel Al Maqam Makkah">Swissôtel Al Maqam Makkah</option>
                                        <option value="King Abdulaziz International Airport">King Abdulaziz International
                                            Airport</option>
                                        <option value="King Khaled International Airport">King Khaled International Airport
                                        </option>
                                        <option value="King Fahd International Airport">King Fahd International Airport
                                        </option>
                                        <option value="Prince Mohammad Bin Abdulaziz Airport">Prince Mohammad Bin Abdulaziz
                                            Airport</option>
                                        <option value="Gassim Airport">Gassim Airport</option>
                                        <option value="Ta’if Regional Airport">Ta’if Regional Airport</option>
                                        <option value="Prince Abdulmohsin Bin Abdulaziz Airport">Prince Abdulmohsin Bin
                                            Abdulaziz Airport</option>
                                        <option value="Abha Regional Airport">Abha Regional Airport</option>
                                        <option value="Tabuk Airport">Tabuk Airport</option>
                                        <option value="Ha'il Airport">Ha'il Airport</option>
                                        <option value="Al Ahsa Airport">Al Ahsa Airport</option>
                                        <option value="Jizan Regional Airport">Jizan Regional Airport</option>
                                        <option value="Al Baha Airport">Al Baha Airport</option>
                                        <option value="Bisha Airport">Bisha Airport</option>
                                        <option value="Gurayat Domestic Airport">Gurayat Domestic Airport</option>
                                        <option value="Nejran Airport">Nejran Airport</option>
                                        <option value="Al Qaisumah/Hafr Al Batin Airport">Al Qaisumah/Hafr Al Batin Airport
                                        </option>
                                        <option value="Rafha Domestic Airport">Rafha Domestic Airport</option>
                                        <option value="Arar Domestic Airport">Arar Domestic Airport</option>
                                        <option value="Sharurah Airport">Sharurah Airport</option>
                                        <option value="Al-Jawf Domestic Airport">Al-Jawf Domestic Airport</option>
                                        <option value="Turaif Domestic Airport">Turaif Domestic Airport</option>
                                        <option value="Wadi Al Dawasir Airport">Wadi Al Dawasir Airport</option>
                                        <option value="Al Wajh Domestic Airport">Al Wajh Domestic Airport</option>
                                        <option value="King Salman Abdulaziz Airport">King Salman Abdulaziz Airport
                                        </option>
                                        <option value="King Khaled Military City Airport">King Khaled Military City Airport
                                        </option>
                                    </select>
                                    <!-- <select name="selectvehicle" id="selectvehicle">
                              <option value="">Select Vehicle</option>
                              <option value="Camry Car">Camry Car</option>
                              <option value="Innova Car">Innova Car</option>
                              <option value="H1 Hyundai">H1 Hyundai</option>
                              <option value="GMC">GMC</option>
                              <option value="Coaster">Coaster</option>
                            </select> -->
                                </div>
                            </div>
                            <button class="primary-btn" type="submit">Request for Taxi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="section-head">
                <h1>Why Us?</h1>
            </div>
            <div class="row">
                <div class="column column_01">
                    <div class="content-holder">
                        <div class="content-icon">
                            <i class="fa fa-solid fa-dollar-sign"></i>
                        </div>
                        <div class="content-heading">
                            <h3>Fixed Prices</h3>
                        </div>
                        <div class="content-desc">
                            <p>For all long distance rides, we offer fixed prices. You'll see the fixed final price before
                                you complete your booking, which won't change if you get stuck in traffic, for example.</p>
                        </div>
                    </div>
                </div>

                <div class="column column_02">
                    <div class="content-holder">
                        <div class="content-icon">
                            <i class="fa fa-regular fa-square-check"></i>
                        </div>
                        <div class="content-heading">
                            <h3>Easy Booking</h3>
                        </div>
                        <div class="content-desc">
                            <p>You can book your ride in just a few steps. Select a pick-up address in one of our cities and
                                we can get you to any destination.</p>
                        </div>
                    </div>
                </div>

                <div class="column column_03">
                    <div class="content-holder">
                        <div class="content-icon">
                            <i class="fa fa-regular fa-user"></i>
                        </div>
                        <div class="content-heading">
                            <h3>Professional Drivers</h3>
                        </div>
                        <div class="content-desc">
                            <p>We have a global network of experienced and trained drivers. You cen be sure that you'll be
                                driven by a professional.</p>
                        </div>
                    </div>
                </div>

                <div class="column column_04">
                    <div class="content-holder">
                        <div class="content-icon">
                            <i class="fa fa-regular fa-user"></i>
                        </div>
                        <div class="content-heading">
                            <h3>24/7 Available</h3>
                        </div>
                        <div class="content-desc">
                            <p>We provide 24/7 service to our valued clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="car-items">
        <div class="container">
            <div class="section-head">
                <h1>Booking Options</h1>
            </div>
            <div class="row">


                <div class="column car-column">
                    <div class="column-content">
                        <div class="car-title">
                            <h2>GMC</h2>
                        </div>
                        <div class="image-holder">
                            <img src="assets/images/gmc.png" alt="Car">
                        </div>
                        <div class="car-props">
                            <ul id="car-menu">
                                <div class="car-desc">
                                    <p>GMC vehicles offer ample space for both passengers and cargo.
                                    </p>
                                </div>
                                <div class="car-btn-holder">
                                    <a href="{{ url('AllVehicles') }}" class="primary-btn" id="carBtn">Book Ride</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column car-column">
                    <div class="column-content">
                        <div class="car-title">
                            <h2>Camry</h2>
                        </div>
                        <div class="image-holder">
                            <img src="assets/images/camry.png" alt="Car">
                        </div>
                        <div class="car-props">
                            <ul id="car-menu">
                                <div class="car-desc">
                                    <p>Camry has the capacity for up to Five Passengers, Generous amount of luggage space
                                    </p>
                                </div>
                                <div class="car-btn-holder">
                                    <a href="{{ url('AllVehicles') }}" class="primary-btn" id="carBtn">Book Ride</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column car-column">
                    <div class="column-content">
                        <div class="car-title">
                            <h2>Sonata</h2>
                        </div>
                        <div class="image-holder">
                            <img src="assets/images/sonata.png" alt="Car">
                        </div>
                        <div class="car-props">
                            <ul id="car-menu">
                                <div class="car-desc">
                                    <p>The Hyundai Sonata is a mid-size sedan that can comfortably seat up to five passengers.
                                    </p>
                                </div>
                                <div class="car-btn-holder">
                                    <a href="{{ url('AllVehicles') }}" class="primary-btn" id="carBtn">Book Ride</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column car-column">
                    <div class="column-content">
                        <div class="car-title">
                            <h2>H1</h2>
                        </div>
                        <div class="image-holder">
                            <img src="assets/images/h1.png" alt="Car">
                        </div>
                        <div class="car-props">
                            <ul id="car-menu">
                                <div class="car-desc">
                                    <p>The H-1 is a 12,3,6 and 9 Seater Van and has a length of 5150 mm, the width of 1920 mm and a wheelbase of 3200 mm
                                    </p>
                                </div>
                                <div class="car-btn-holder">
                                    <a href="{{ url('AllVehicles') }}" class="primary-btn" id="carBtn">Book Ride</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="tickets">
        <div class="container">
            <div class="row">
                <div class="column column_01">
                    <div class="image-holder">
                        <img src=" {{ asset('assets/images/ticket.jpg') }}" alt="Umrah">
                    </div>
                </div>
                <div class="column column_02">
                    <div class="content-holder">
                        <h2>Tired of booking online tickets?</h2>
                        <h3>let us do your work.</h3>
                    </div>
                </div>
                <div class="column column_03">
                    <div class="btn-holder">
                        <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages">
        <div class="container">
            <div class="section-title">
                <div class="heading">
                    <h1>Choose Your Hotel</h1>
                </div>
                <div class="button-holder">
                    <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
                </div>
            </div>

            <div class="accordion-holder">
                <button class="accordion">
                    <h3>3 Star Hotels</h3>
                </button>
                <div class="panel">
                    <div class="row">
                        <!-- 3 star -->
                        @foreach ($star_3 as $item)
                            <div class="column">
                                <div class="image-holder">
                                    <img src="{{ asset('/assets/uploads/hotelimages/' . $item->hotel_image) }} "
                                        alt="Umrah">
                                </div>
                                <div class="details_holder">
                                    <h2>{{ $item->title }}</h2>
                                    <h3>{{ $item->stars }} Star <i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                                    <h5>{{ $item->nights_in_makkah }}</h5>
                                    <h5>{{ $item->nights_in_madinah }}</h5>
                                    <div class="pkg_footer_holder">
                                        <p><strong>£{{ $item->price }} </strong><small>per passenger</small></p>
                                    </div>
                                    <div class="button-holder">
                                        <a href="https://wa.me/447999451002" class="primary-btn">Book Now!</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

                <button class="accordion">
                    <h3>4 Star Hotels</h3>
                </button>
                <div class="panel">
                    <div class="row">
                        <!-- 4 star -->
                        @foreach ($star_4 as $item)
                            <div class="column">
                                <div class="image-holder">
                                    <img src="{{ asset('/assets/uploads/hotelimages/' . $item->hotel_image) }} "
                                        alt="Umrah">
                                </div>
                                <div class="details_holder">
                                    <h2>{{ $item->title }}</h2>
                                    <h3>{{ $item->stars }} Star <i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i></h3>
                                    <h5>{{ $item->nights_in_makkah }}</h5>
                                    <h5>{{ $item->nights_in_madinah }}</h5>
                                    <div class="pkg_footer_holder">
                                        <p><strong>£{{ $item->price }} </strong><small>per passenger</small></p>
                                    </div>
                                    <div class="button-holder">
                                        <a href="https://wa.me/447999451002" class="primary-btn">Book Now!</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

                <button class="accordion">
                    <h3>5 Star Hotels</h3>
                </button>
                <div class="panel">
                    <div class="row">
                        <!-- 4 star -->
                        @foreach($star_5 as $item)
                        <div class="column">
                          <div class="image-holder">
                            <img src="{{ asset('/assets/uploads/hotelimages/'.$item->hotel_image) }} " alt="Umrah">
                          </div>
                          <div class="details_holder">
                            <h2>{{$item->title}}</h2>
                            <h3>{{$item->stars}} Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                            <h5>{{$item->nights_in_makkah}}</h5>
                            <h5>{{$item->nights_in_madinah}}</h5>
                            <div class="pkg_footer_holder">
                            <p><strong>£{{$item->price}} </strong><small>per passenger</small></p>
                          </div>
                          <div class="button-holder">
                            <a href="https://wa.me/447999451002" class="primary-btn">Book Now!</a>
                          </div>
                          </div>

                        </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="grid-cols">
        <div class="container">
            <div class="section-head">
                <h1>Our Values</h1>
            </div>
            <div class="row">
                <div class="column-holder row-reverse">
                    <div class="column column_03 content-column">
                        <div class="content-holder">
                            <div class="content-heading">
                                <h3>Executive Staff Service</h3>
                            </div>
                            <div class="content-desc">
                                <p>Our Staff are all enhanced DBS-checked professionals with a wealth of driving experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column column_05 image-column">
                        <div class="image-holder">
                            <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677754467/taxi_02_il8u10.jpg"
                                alt="Taxi">
                        </div>
                    </div>
                </div>

                <div class="column-holder">
                    <div class="column column_01 content-column">
                        <div class="content-holder">
                            <div class="content-heading">
                                <h3>Reliable & Professional</h3>
                            </div>
                            <div class="content-desc">
                                <p>We are proud to offer a reliable service, tailored to meet your requirements and
                                    schedule, on time, every time.</p>
                                <p>Whether you’re hiring one of our vehicles for your wedding day, airport transfer or
                                    corporate event, your will arrive promptly and provide any assistance you require. We
                                    will ensure that you reach your destination in style and on time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column column_02 image-column">
                        <div class="image-holder">
                            <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677751356/taxi_lkhqod.jpg"
                                alt="Taxi">
                        </div>
                    </div>
                </div>

                <div class="column-holder row-reverse">
                    <div class="column column_03 content-column">
                        <div class="content-holder">
                            <div class="content-heading">
                                <h3>Your Safety is Our Priority</h3>
                            </div>
                            <div class="content-desc">
                                <p>Our chauffeurs are all enhanced DBS-checked professionals with a wealth of driving
                                    experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column column_05 image-column">
                        <div class="image-holder">
                            <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677751463/taxi_01_yuhlwb.jpg"
                                alt="Taxi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reviews">
            <div class="container">
                <div class="content-wrapper review-content">
                    <div class="section testimonial-review">
                        <div class="section-head">
                            <h1>What Our Clients Are Saying?</h1>
                          </div>
                        <div class="column">
                        <div class="single-review">
                            <div class="quote">
                                I recently used Aahil Makkah Taxi Service to book a taxi for a business trip, and I was very impressed with the experience. The site was very user-friendly and easy to navigate, and I was able to book my ride in just a few minutes.
                            </div>
                            <div class="name">
                            - Rizwan Ahmad
                            </div>
                        </div>
                        <div class="single-review">
                            <div class="quote">
                                I recently used Aahil Makkah Taxi Service to book a ride and I was impressed. The site was easy to use and had a great selection of transportation options. My driver was professional and the ride was comfortable. I would use this service again.
                            </div>
                            <div class="name">
                            - Sonika Usman
                            </div>
                        </div>

                        </div>
                      </div>
                </div>
            </div>



</section>


    <section class="passport">
        <div class="container">
            <div class="row">
                <div class="columns">
                    <div class="image-holder">
                        <img src=" {{ asset('assets/images/passport.jpg') }}" alt="Umrah">
                    </div>
                    <div class="content-holder">
                        <h1>Are you British Citizen?</h1>
                        <h2>Avail Our Visa Services.</h2>
                        <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="whatsapp-icon">
        <a href="https://wa.me/447999451002" target="_blank">
            <img src="{{ asset('assets/images/whatsapp.png') }}" alt="Whatsapp">
        </a>
    </div>

    <div class="phone-icon">
        <a href="tel:+44 7999 451002">
            <img src="{{ asset('assets/images/phone.png') }}" alt="Phone">
        </a>
    </div>
@endsection
