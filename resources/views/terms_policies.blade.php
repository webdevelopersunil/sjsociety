<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Success Message Styles */
        .alert-success {
            background-color: #4CAF50; /* Green background color */
            color: #fff; /* White text color */
            font-weight: bold; /* Bold text */
            padding: 15px; /* Padding for better readability */
            border-radius: 5px; /* Rounded corners */
            margin-bottom: 15px; /* Margin between alerts */
        }

        /* Error Message Styles */
        .alert-danger {
            background-color: #FF6347; /* Red background color */
            color: #fff; /* White text color */
            font-weight: bold; /* Bold text */
            padding: 15px; /* Padding for better readability */
            border-radius: 5px; /* Rounded corners */
            margin-bottom: 15px; /* Margin between alerts */
        }

    </style>
</head>
<body>
<section class="text-gray-600 body-font bg-yellow-100">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Super Champ Competition (Go Back To Form)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container flex flex-col md:flex-row lg:max-w-5xl w-full px-5 py-12 md:py-24 mx-auto section" id="contact-form">
        <div class="md:12 w-full">
            <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Terms & Policies</h1>
            <p class="leading-relaxed text-xl text-gray-900">
                In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services:
            </p>
            <p class="leading-relaxed text-xl text-gray-900" >
            In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services, please <a href="{{ route('contact.us') }}">Contact Us</a> at:
            </p>
            

            <div class="content">
            <h2 class="section-title">1. OUR SERVICES</h2>
            <p class="leading-relaxed text-xl text-gray-900" >
                The information provided when using the Services is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Services from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.
            </p>

            <h2 class="section-title">2. INTELLECTUAL PROPERTY RIGHTS</h2>
            <p class="leading-relaxed text-xl text-gray-900" >
            We are the owner or the licensee of all intellectual property rights in our Services, including all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics in the Services (collectively, the "Content"), as well as the trademarks, service marks, and logos contained therein (the "Marks").
            </p>
            <p class="leading-relaxed text-xl text-gray-900" >
            Our Content and Marks are protected by copyright and trademark laws (and various other intellectual property rights and unfair competition laws) and treaties in the United States and around the world.
            </p>
          </div>

          <h2 class="section-title">3.  Privacy Policy</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
                Privacy Policy

This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.
<br>
We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Generator.
<br>
Interpretation and Definitions<br>
Interpretation<br>
The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
<br>
Definitions<br>
For the purposes of this Privacy Policy:<br>
<br>
Account means a unique account created for You to access our Service or parts of our Service.
<br>
Affiliate means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.
<br>
Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to SUPER CHAMP COMPETITION.
<br>
Cookies are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.
<br>
Country refers to: Haryana, India<br>
<br>
Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.
<br>
Personal Data is any information that relates to an identified or identifiable individual.
<br>
Service refers to the Website.
<br>
Service Provider means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.
<br>
Usage Data refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).
<br>
Website refers to SUPER CHAMP COMPETITION, accessible from SJSJSCOITY.IN
<br>
You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.
<br>

Cookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.<br>
Web Beacons. Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).
Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. You can learn more about cookies on TermsFeed website article.
<br>
We use both Session and Persistent Cookies for the purposes set out below:
<br>
Necessary / Essential Cookies
<br>
Type: Session Cookies
<br>
Administered by: Us
<br>
Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.
<br>
Cookies Policy / Notice Acceptance Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These Cookies identify if users have accepted the use of cookies on the Website.
<br>
Functionality Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.
<br>
For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.
<br>
Use of Your Personal Data<br>
The Company may use Personal Data for the following purposes:<br>

<br>
To provide and maintain our Service, including to monitor the usage of our Service.
<br>
To manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.
<br>
For the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.
<br>
To contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.
<br>

<br>
Our Service may give You the ability to delete certain information about You from within the Service.
<br>
You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.
<br>
Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.
<br>
Disclosure of Your Personal Data<br>

Business Transactions<br>

If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.<br>

<br>
Law enforcement<br>

Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).<br>

<br>
Other legal requirements<br>
The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:<br>

<br>
Comply with a legal obligation<br>
Protect and defend the rights or property of the Company<br>
Prevent or investigate possible wrongdoing in connection with the Service<br>
Protect the personal safety of Users of the Service or the public<br>
Protect against legal liability<br>
Security of Your Personal Data<br>
The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.
<br>
Children's Privacy<br>
Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.
<br>
If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.<br>

<br>
Links to Other Websites <br>
Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.
<br>
We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.
<br>
Changes to this Privacy Policy
We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.
<br>
We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.
<br>
You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
<br>
Contact Us<br>
If you have any questions about this Privacy Policy, You can contact us:
<br>
By email: sjsjsociety@gmail.com
               
          </p>

                    

          <h2 class="section-title">4. PRODUCTS</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            All products are subject to availability. We reserve the right to discontinue any products at any time for any reason. Prices for all products are subject to change.
          </p>



          <h2 class="section-title">5. PURCHASES AND PAYMENT</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            We accept the following forms of payment:
                <br>
                - Discover
                <br>
                - American Express
                <br>
                - Mastercard
                <br>
                - Visa
                <br>
                - Google Pay
                <br>
                - Scan and UPI services
                <br>
                You agree to pay all charges at the prices then in effect for your purchases and any applicable shipping fees, and you authorize us to charge your chosen payment provider for any such amounts upon placing your order. We reserve the right to correct any errors or mistakes in pricing, even if we have already requested or received payment.
                <br>
                We reserve the right to refuse any order placed through the Services. We may, in our sole discretion, limit or cancel quantities purchased per person, per household, or per order. These restrictions may include orders placed by or under the same customer account, the same payment method, and/or orders that use the same billing or shipping address. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers, or distributors.
          </p>


          <h2 class="section-title">6. REFUNDS POLICY</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            All sales are final and 5 days taken to process the refund and credit the amount to the customer's bank account.(4-5 working days)
            <br>
            Shipping policy - 2 days Minimum and 3 days Maximum Delivery timeline (Vihan trading company)
          </p>



          <h2 class="section-title">7. PROHIBITED ACTIVITIES</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
          You may not access or use the Services for any purpose other than that for which we make the Services available. The Services may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.
            <br>
            As a user of the Services, you agree not to: <br>
            Systematically retrieve data or other content from the Services to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us. <br>
            Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.<br>
            Circumvent, disable, or otherwise interfere with security-related features of the Services, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Services and/or the Content contained therein.<br>
            Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Services.<br>
            Use any information obtained from the Services in order to harass, abuse, or harm another person.<br>
            Make improper use of our support services or submit false reports of abuse or misconduct.<br>
            Use the Services in a manner inconsistent with any applicable laws or regulations.<br>
            Engage in unauthorized framing of or linking to the Services.<br>
            Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Services or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Services.
          </p>



          <h2 class="section-title">8. USER GENERATED CONTRIBUTIONS</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            The Services does not offer users to submit or post content.
          </p>



          <h2 class="section-title">9. CONTRIBUTION LICENSE</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            You and Services agree that we may access, store, process, and use any information and personal data that you provide and your choices (including settings).
                <br>
            By submitting suggestions or other feedback regarding the Services, you agree that we can use and share such feedback for any purpose without compensation to you.
          </p>



          <h2 class="section-title">10. SERVICES MANAGEMENT</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              We reserve the right, but not the obligation, to: (1) monitor the Services for violations of these Legal Terms; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Legal Terms, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in our sole discretion and without limitation, notice, or liability, to remove from the Services or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; and (5) otherwise manage the Services in a manner designed to protect our rights and property and to facilitate the proper functioning of the Services.
          </p>


          <h2 class="section-title">11. TERM AND TERMINATION</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            These Legal Terms shall remain in full force and effect while you use the Services. WITHOUT LIMITING ANY OTHER PROVISION OF THESE LEGAL TERMS, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SERVICES (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE LEGAL TERMS OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SERVICES OR DELETE ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION.
                <br>
            If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.
          </p>


          <h2 class="section-title">12. MODIFICATIONS AND INTERRUPTIONS</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            We reserve the right to change, modify, or remove the contents of the Services at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Services. We also reserve the right to modify or discontinue all or part of the Services without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Services.
                <br>
            We cannot guarantee the Services will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Services, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Services at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Services during any downtime or discontinuance of the Services. Nothing in these Legal Terms will be construed to obligate us to maintain and support the Services or to supply any corrections, updates, or releases in connection therewith.
          </p>

          <h2 class="section-title">13. GOVERNING LAW</h2>
          <p class="leading-relaxed text-xl text-gray-900" >    
            These Legal Terms shall be governed by and defined following the laws of India. ____ and yourself irrevocably consent that the courts of India shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these Legal Terms.
          </p>
            
          <h2 class="section-title">14. DISPUTE RESOLUTION</h2>
          <p class="leading-relaxed text-xl text-gray-900" >    
            You agree to irrevocably submit all disputes related to these Legal Terms or the legal relationship established by these Legal Terms to the jurisdiction of the India courts. ____ shall also maintain the right to bring proceedings as to the substance of the matter in the courts of the country where you reside or, if these Legal Terms are entered into in the course of your trade or profession, the state of your principal place of business.
          </p>

          <h2 class="section-title">15. CORRECTIONS</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            There may be information on the Services that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Services at any time, without prior notice.
          </p>


          <h2 class="section-title">16. DISCLAIMER</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              THE SERVICES ARE PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SERVICES WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SERVICES AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SERVICES' CONTENT OR THE CONTENT OF ANY WEBSITES OR MOBILE APPLICATIONS LINKED TO THE SERVICES AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SERVICES, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SERVICES, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SERVICES BY ANY THIRD PARTY, AND/OR (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE SERVICES, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.
          </p>

          <h2 class="section-title">17. LIMITATIONS OF LIABILITY</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SERVICES, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
          </p>
            
          <h2 class="section-title">18. INDEMNIFICATION</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) use of the Services; (2) breach of these Legal Terms; (3) any breach of your representations and warranties set forth in these Legal Terms; (4) your violation of the rights of a third party, including but not limited to intellectual property rights; or (5) any overt harmful act toward any other user of the Services with whom you connected via the Services. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.
          </p>

          <h2 class="section-title">19. USER DATA</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              We will maintain certain data that you transmit to the Services for the purpose of managing the performance of the Services, as well as data relating to your use of the Services. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Services. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.
          </p>

          <h2 class="section-title">20. ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              Visiting the Services, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Services, satisfy any legal requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SERVICES. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.
          </p>

          <h2 class="section-title">21. MISCELLANEOUS</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
              These Legal Terms and any policies or operating rules posted by us on the Services or in respect to the Services constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Legal Terms shall not operate as a waiver of such right or provision. These Legal Terms operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Legal Terms is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Legal Terms and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Legal Terms or use of the Services. You agree that these Legal Terms will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Legal Terms and the lack of signing by the parties hereto to execute these Legal Terms.
          </p>

          <h2 class="section-title">22. CONTACT US</h2>
          <p class="leading-relaxed text-xl text-gray-900" >
            In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services, please contact us at:
          </p>
        </div>
    </div>
</section>
</body>
</html>