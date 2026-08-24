<!-- CUSTOMER GUIDELINES & DISCLAIMER SECTION -->
<style>
    .guidelines-section {
        background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 50%, #f4fbf7 100%);
        position: relative;
    }

    .guidelines-header-badge {
        background: #ff5722;
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 30px;
        display: inline-block;
    }

    .guideline-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(3, 135, 207, 0.08);
        border: 1px solid rgba(3, 135, 207, 0.12);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .guideline-card:hover {
        box-shadow: 0 15px 35px rgba(3, 135, 207, 0.14);
        transform: translateY(-3px);
    }

    .guideline-card-header {
        background: linear-gradient(135deg, #0387cf 0%, #005f9e 100%);
        color: #fff;
        padding: 18px 24px;
    }

    .guideline-card-header.reward-header {
        background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
    }

    .guideline-list {
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .guideline-list li {
        position: relative;
        padding: 14px 16px 14px 50px;
        border-bottom: 1px dashed #e2e8f0;
        font-size: 15px;
        line-height: 1.6;
        color: #334155;
    }

    .guideline-list li:last-child {
        border-bottom: none;
    }

    .guideline-num {
        position: absolute;
        left: 14px;
        top: 14px;
        width: 28px;
        height: 28px;
        background: #e0f2fe;
        color: #0387cf;
        font-weight: 700;
        font-size: 14px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .official-contact-banner {
        background: linear-gradient(135deg, #fff3cd 0%, #ffecb5 100%);
        border: 2px solid #ffc107;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 8px 20px rgba(255, 193, 7, 0.15);
    }

    .official-phone-btn {
        background: #d32f2f;
        color: #fff !important;
        font-weight: 700;
        font-size: 20px;
        padding: 10px 24px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(211, 47, 47, 0.35);
        transition: all 0.3s ease;
    }

    .official-phone-btn:hover {
        background: #b71c1c;
        transform: scale(1.04);
    }

    .reward-box {
        background: #f1f8e9;
        border: 2px dashed #4caf50;
        border-radius: 14px;
        padding: 20px;
    }

    .lang-tabs-custom {
        display: inline-flex;
        background: #e2e8f0;
        padding: 4px;
        border-radius: 30px;
        gap: 4px;
    }

    .lang-tabs-custom .btn {
        border-radius: 25px;
        padding: 6px 18px;
        font-size: 13.5px;
        font-weight: 600;
        border: none;
    }

    .lang-tabs-custom .btn.active {
        background: #0387cf;
        color: #fff;
        box-shadow: 0 2px 8px rgba(3, 135, 207, 0.3);
    }

    .notice-lead-box {
        background: #fff8e1;
        border-left: 4px solid #ff9800;
        padding: 14px 18px;
        border-radius: 0 10px 10px 0;
        font-size: 15.5px;
        color: #5d4037;
    }
</style>

<section class="guidelines-section py-5" id="guidelines">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-4">
            <span class="guidelines-header-badge mb-2">
                <i class="bi bi-shield-lock-fill me-1"></i> <span data-lang-key="guidelines_badge">Safety & Transparency</span>
            </span>
            <h2 class="fw-bold text-dark mt-2" data-lang-key="guidelines_title">
                Important Customer Guidelines, Disclaimer & Reward Policy
            </h2>
            <p class="text-muted fs-6" data-lang-key="guidelines_subtitle">
                Please read carefully before booking or paying any technician
            </p>

            <!-- Language Switcher Bar for Guidelines Section -->
            <div class="lang-tabs-custom mt-2" role="group" aria-label="Guidelines Language">
                <button type="button" class="btn guideline-tab-btn active" data-lang="en">
                    🇬🇧 English
                </button>
                <button type="button" class="btn guideline-tab-btn" data-lang="hi">
                    🇮🇳 हिन्दी (Hindi)
                </button>
                <button type="button" class="btn guideline-tab-btn" data-lang="or">
                    🇮🇳 ଓଡ଼ିଆ (Odia)
                </button>
            </div>
        </div>

        <div class="tab-content mt-4">

            <!-- 1. ENGLISH PANE -->
            <div class="guidelines-lang-pane fade show active" id="guidelines-en">
                <div class="row g-4">
                    <!-- Left: Guidelines & Disclaimer -->
                    <div class="col-lg-7">
                        <div class="guideline-card h-100">
                            <div class="guideline-card-header d-flex align-items-center justify-content-between">
                                <h3 class="h5 mb-0 fw-bold">
                                    <i class="bi bi-card-checklist me-2"></i> IMPORTANT CUSTOMER GUIDELINES & DISCLAIMER
                                </h3>
                                <span class="badge bg-warning text-dark">Official Notice</span>
                            </div>
                            <div class="p-4">
                                <div class="notice-lead-box mb-3">
                                    <strong>Dear Customer,</strong><br>
                                    Our service center provides <strong>washing machine, refrigerator, AC and other appliance-related repair and service only</strong>. Customers are requested to strictly follow the guidelines below:
                                </div>

                                <ul class="guideline-list">
                                    <li>
                                        <span class="guideline-num">1</span>
                                        Our technicians/mechanics are authorized to perform <strong>only service-related work assigned by the company</strong>.
                                    </li>
                                    <li>
                                        <span class="guideline-num">2</span>
                                        If any technician asks you to give money for any <strong>personal work, personal transaction, loan, advance, purchase, or any work unrelated to your service</strong>, please do not make any payment without first confirming with the company.
                                    </li>
                                    <li>
                                        <span class="guideline-num">3</span>
                                        If any technician makes a personal promise, offers a personal service, asks for personal financial help, or attempts to create any personal transaction with you, <strong>please contact the company immediately</strong>.
                                    </li>
                                    <li>
                                        <span class="guideline-num">4</span>
                                        <strong>Do not make any payment</strong> to a technician for work or services that have not been officially confirmed by the company.
                                    </li>
                                    <li>
                                        <span class="guideline-num">5</span>
                                        If you have any doubt regarding <strong>service charges, spare parts, additional work, payment</strong>, or any other service-related matter, please contact the company directly before making any payment.
                                    </li>
                                    <li>
                                        <span class="guideline-num">6</span>
                                        Any personal transaction or personal financial dealing between a customer and a technician, without prior authorization/confirmation from the company, will be <strong>considered a matter between the concerned individuals and will not be treated as an official company transaction</strong>.
                                    </li>
                                    <li>
                                        <span class="guideline-num">7</span>
                                        <strong>The company/owner will not be responsible</strong> for any loss arising from an unauthorized personal transaction or payment made by a customer directly to a technician.
                                    </li>
                                    <li>
                                        <span class="guideline-num">8</span>
                                        For your safety and protection, <strong>always confirm with the company before making any payment or agreeing to any additional work</strong>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Reward Policy & Official Contact Box -->
                    <div class="col-lg-5">
                        <div class="d-flex flex-column gap-4">

                            <!-- Official Helpline Box -->
                            <div class="official-contact-banner text-center">
                                <h4 class="fw-bold text-dark mb-2">
                                    <i class="bi bi-telephone-inbound-fill text-danger me-2"></i> OFFICIAL CONTACT NUMBER
                                </h4>
                                <p class="text-muted small mb-3">
                                    For any service query, payment confirmation, additional work, complaint, or doubt, call directly:
                                </p>
                                <a href="tel:+917752083960" class="official-phone-btn mb-3">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="https://wa.me/917752083960?text=Hello%20Hansraj%20Enterprises,%20I%20want%20to%20verify%20my%20service/payment" class="btn btn-sm btn-success rounded-pill px-3" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> WhatsApp Verification
                                    </a>
                                </div>
                                <div class="mt-3 pt-2 border-top border-warning-subtle small text-dark fw-semibold">
                                    🛡️ Your safety and satisfaction are our priority. Thank you for choosing our Service Center.
                                </div>
                            </div>

                            <!-- Customer Reporting & Reward Policy -->
                            <div class="guideline-card">
                                <div class="guideline-card-header reward-header">
                                    <h3 class="h5 mb-0 fw-bold">
                                        <i class="bi bi-gift-fill me-2"></i> CUSTOMER REPORTING & REWARD POLICY
                                    </h3>
                                </div>
                                <div class="p-4">
                                    <div class="reward-box mb-3">
                                        <h5 class="fw-bold text-success mb-2">
                                            <i class="bi bi-award-fill me-1"></i> Earn Discount as Token of Appreciation
                                        </h5>
                                        <p class="small mb-0 text-dark">
                                            If you have doubt about a technician's conversation, behavior, personal payment demand, or unauthorized work:
                                        </p>
                                    </div>

                                    <ul class="list-unstyled mb-3">
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-record-circle-fill text-danger flex-shrink-0 mt-1"></i>
                                            <span><strong>Record Evidence:</strong> Record conversation or relevant evidence (where legally permitted) and send directly to <strong>7752083960</strong>.</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-tags-fill text-success flex-shrink-0 mt-1"></i>
                                            <span><strong>Discount Reward:</strong> After verification, the company may provide a <strong>special discount on your service charge</strong> as appreciation for helping protect transparency.</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-exclamation-triangle-fill text-warning flex-shrink-0 mt-1"></i>
                                            <span><strong>Strict Action:</strong> The owner/company has sole authority to review and take strict disciplinary/punitive action against offending technicians.</span>
                                        </li>
                                        <li class="small d-flex gap-2">
                                            <i class="bi bi-shield-fill-check text-primary flex-shrink-0 mt-1"></i>
                                            <span><strong>Do not argue:</strong> Please do not confront the technician. Simply report the matter to <strong>7752083960</strong> with evidence.</span>
                                        </li>
                                    </ul>

                                    <a href="https://wa.me/917752083960?text=Hello%20Hansraj%20Enterprises,%20I%20want%20to%20report%20a%20technician%20matter%20with%20evidence" class="btn btn-outline-success w-100 rounded-pill fw-semibold btn-sm" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> Report with Evidence via WhatsApp
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. HINDI PANE -->
            <div class="guidelines-lang-pane fade" id="guidelines-hi">
                <div class="row g-4">
                    <!-- Left: Hindi Guidelines -->
                    <div class="col-lg-7">
                        <div class="guideline-card h-100">
                            <div class="guideline-card-header d-flex align-items-center justify-content-between">
                                <h3 class="h5 mb-0 fw-bold">
                                    <i class="bi bi-card-checklist me-2"></i> महत्वपूर्ण ग्राहक दिशानिर्देश एवं सूचना
                                </h3>
                                <span class="badge bg-warning text-dark">आधिकारिक सूचना</span>
                            </div>
                            <div class="p-4">
                                <div class="notice-lead-box mb-3">
                                    <strong>प्रिय ग्राहक,</strong><br>
                                    हमारा सर्विस सेंटर केवल <strong>Washing Machine, Refrigerator, AC एवं अन्य घरेलू उपकरणों की सर्विस और रिपेयरिंग</strong> से संबंधित कार्य करता है। ग्राहकों से अनुरोध है कि नीचे दिए गए दिशानिर्देशों का पालन करें:
                                </div>

                                <ul class="guideline-list">
                                    <li>
                                        <span class="guideline-num">1</span>
                                        हमारे Technician/Mechanic को कंपनी द्वारा दिए गए <strong>केवल Service से संबंधित कार्य करने के लिए अधिकृत</strong> किया गया है।
                                    </li>
                                    <li>
                                        <span class="guideline-num">2</span>
                                        यदि कोई Technician/Mechanic आपसे <strong>Personal काम, Personal लेन-देन, उधार, Advance, खरीदारी या Service के अलावा किसी अन्य काम के लिए पैसे मांगता है</strong>, तो बिना कंपनी से पुष्टि किए कोई भी भुगतान न करें।
                                    </li>
                                    <li>
                                        <span class="guideline-num">3</span>
                                        यदि कोई Technician व्यक्तिगत रूप से कोई काम करने, कोई सुविधा देने, पैसे लेने या किसी प्रकार का Personal Transaction करने की बात करता है, तो <strong>कृपया तुरंत कंपनी से संपर्क करके इसकी पुष्टि करें</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">4</span>
                                        कंपनी की जानकारी या अनुमति के बिना <strong>किसी Technician को किसी अतिरिक्त काम या Personal काम के लिए भुगतान न करें</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">5</span>
                                        Service Charge, Spare Parts, Extra Work, Payment या किसी भी Service-related जानकारी के लिए <strong>सीधे कंपनी के Official Number पर संपर्क करें</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">6</span>
                                        ग्राहक और Technician के बीच कंपनी की पूर्व अनुमति/पुष्टि के बिना किया गया कोई भी Personal Transaction या Personal Financial Dealing, <strong>कंपनी का आधिकारिक लेन-देन नहीं माना जाएगा</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">7</span>
                                        कंपनी की जानकारी या अनुमति के बिना ग्राहक द्वारा Technician को किए गए किसी भी Personal Payment या Transaction से होने वाले <strong>नुकसान की जिम्मेदारी कंपनी/Owner की नहीं होगी</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">8</span>
                                        अपनी सुरक्षा के लिए किसी भी प्रकार का Payment करने या Extra Work करवाने से पहले <strong>कंपनी से पुष्टि अवश्य करें</strong>।
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Hindi Reward Policy & Official Contact Box -->
                    <div class="col-lg-5">
                        <div class="d-flex flex-column gap-4">

                            <!-- Official Helpline Box -->
                            <div class="official-contact-banner text-center">
                                <h4 class="fw-bold text-dark mb-2">
                                    <i class="bi bi-telephone-inbound-fill text-danger me-2"></i> OFFICIAL CONTACT NUMBER
                                </h4>
                                <p class="text-muted small mb-3">
                                    किसी भी Service-related जानकारी, Payment Confirmation, Extra Work, Complaint या Doubt के लिए सीधे संपर्क करें:
                                </p>
                                <a href="tel:+917752083960" class="official-phone-btn mb-3">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="https://wa.me/917752083960?text=नमस्ते%20हंसराज%20एंटरप्राइजेज,%20मुझे%20सर्विस/पेमेंट%20की%20पुष्टि%20करनी%20है" class="btn btn-sm btn-success rounded-pill px-3" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> व्हाट्सएप द्वारा पुष्टि
                                    </a>
                                </div>
                                <div class="mt-3 pt-2 border-top border-warning-subtle small text-dark fw-semibold">
                                    🛡️ आपकी सुरक्षा और संतुष्टि हमारे लिए महत्वपूर्ण है। हमारी Service का चयन करने के लिए धन्यवाद।
                                </div>
                            </div>

                            <!-- Customer Reporting & Reward Policy -->
                            <div class="guideline-card">
                                <div class="guideline-card-header reward-header">
                                    <h3 class="h5 mb-0 fw-bold">
                                        <i class="bi bi-gift-fill me-2"></i> ग्राहक रिपोर्टिंग एवं इनाम नीति
                                    </h3>
                                </div>
                                <div class="p-4">
                                    <div class="reward-box mb-3">
                                        <h5 class="fw-bold text-success mb-2">
                                            <i class="bi bi-award-fill me-1"></i> रिपोर्ट करने पर सर्विस चार्ज में डिस्काउंट
                                        </h5>
                                        <p class="small mb-0 text-dark">
                                            यदि आपको किसी Technician/Mechanic की बातचीत, व्यवहार, Personal Payment मांगने या अनधिकृत गतिविधि पर कोई संदेह हो:
                                        </p>
                                    </div>

                                    <ul class="list-unstyled mb-3">
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-record-circle-fill text-danger flex-shrink-0 mt-1"></i>
                                            <span><strong>सबूत रिकॉर्ड करें:</strong> जहाँ कानूनी अनुमति हो, बातचीत या सबूत की Recording करके सीधे <strong>7752083960</strong> पर भेजें।</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-tags-fill text-success flex-shrink-0 mt-1"></i>
                                            <span><strong>इनाम / डिस्काउंट:</strong> जांच और पुष्टि के बाद कंपनी ग्राहक को <strong>Applicable Service Charge में Discount</strong> प्रदान कर सकती है।</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-exclamation-triangle-fill text-warning flex-shrink-0 mt-1"></i>
                                            <span><strong>सख्त कार्रवाई:</strong> नियमों का उल्लंघन करने वाले Technician पर Disciplinary Action/Punishment लेने का पूरा अधिकार Owner/Company का रहेगा।</span>
                                        </li>
                                        <li class="small d-flex gap-2">
                                            <i class="bi bi-shield-fill-check text-primary flex-shrink-0 mt-1"></i>
                                            <span><strong>विवाद न करें:</strong> Technician से बहस या विवाद न करें। केवल सबूत के साथ सीधे कंपनी को <strong>7752083960</strong> पर सूचना दें।</span>
                                        </li>
                                    </ul>

                                    <a href="https://wa.me/917752083960?text=नमस्ते%20हंसराज%20एंटरप्राइजेज,%20मुझे%20टेक्नीशियन%20के%20बारे%20में%20सबूत%20के%20साथ%20रिपोर्ट%20करना%20है" class="btn btn-outline-success w-100 rounded-pill fw-semibold btn-sm" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> व्हाट्सएप पर सबूत भेजें / रिपोर्ट करें
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. ODIA PANE -->
            <div class="guidelines-lang-pane fade" id="guidelines-or">
                <div class="row g-4">
                    <!-- Left: Odia Guidelines -->
                    <div class="col-lg-7">
                        <div class="guideline-card h-100">
                            <div class="guideline-card-header d-flex align-items-center justify-content-between">
                                <h3 class="h5 mb-0 fw-bold">
                                    <i class="bi bi-card-checklist me-2"></i> ଗ୍ରାହକଙ୍କ ପାଇଁ ଜରୁରୀ ନିର୍ଦ୍ଦେଶ ଓ ସୂଚନା
                                </h3>
                                <span class="badge bg-warning text-dark">ଅଫିସିଆଲ୍ ସୂଚନା</span>
                            </div>
                            <div class="p-4">
                                <div class="notice-lead-box mb-3">
                                    <strong>ପ୍ରିୟ ଗ୍ରାହକ,</strong><br>
                                    ଆମ Service Center ରେ କେବଳ <strong>Washing Machine, Refrigerator, AC ଏବଂ ଅନ୍ୟାନ୍ୟ ଘରୋଇ ଉପକରଣର Service ଓ Repairing</strong> ସମ୍ବନ୍ଧୀୟ କାମ କରାଯାଏ। ଗ୍ରାହକମାନଙ୍କୁ ଅନୁରୋଧ, ଦୟାକରି ନିମ୍ନଲିଖିତ ନିୟମଗୁଡ଼ିକ ପାଳନ କରନ୍ତୁ:
                                </div>

                                <ul class="guideline-list">
                                    <li>
                                        <span class="guideline-num">1</span>
                                        ଆମ Technician/Mechanic ମାନେ କେବଳ Company ଦ୍ୱାରା ଦିଆଯାଇଥିବା <strong>Service ସମ୍ବନ୍ଧୀୟ କାମ କରିବା ପାଇଁ ଅଧିକୃତ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">2</span>
                                        ଯଦି କୌଣସି Technician/Mechanic ଆପଣଙ୍କୁ <strong>Personal କାମ, ବ୍ୟକ୍ତିଗତ ଟଙ୍କା ନେବା-ଦେବା, ଧାର, Advance, କିଣାକିଣି କିମ୍ବା Service ବାହାରେ ଅନ୍ୟ କୌଣସି କାମ ପାଇଁ ଟଙ୍କା ମାଗନ୍ତି</strong>, ତେବେ Company ସହିତ ନିଶ୍ଚିତ ନହୋଇ କୌଣସି ଟଙ୍କା ଦିଅନ୍ତୁ ନାହିଁ।
                                    </li>
                                    <li>
                                        <span class="guideline-num">3</span>
                                        କୌଣସି Technician ଯଦି Personal ଭାବେ କୌଣସି କାମ କରିଦେବା, ଟଙ୍କା ନେବା କିମ୍ବା କୌଣସି Personal Transaction କରିବାକୁ କହନ୍ତି, ତେବେ <strong>ପ୍ରଥମେ Company ସହିତ ଯୋଗାଯୋଗ କରି ନିଶ୍ଚିତ କରନ୍ତୁ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">4</span>
                                        Company ର ଅନୁମତି କିମ୍ବା ନିଶ୍ଚିତକରଣ ବିନା <strong>କୌଣସି Technician ଙ୍କୁ Service ବାହାରେ ଅନ୍ୟ କାମ ପାଇଁ ଟଙ୍କା ଦିଅନ୍ତୁ ନାହିଁ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">5</span>
                                        Service Charge, Spare Parts, Extra Work, Payment କିମ୍ବା ଅନ୍ୟ କୌଣସି Service-related ସୂଚନା ପାଇଁ <strong>ସିଧାସଳଖ Company ର Official Number ରେ ଯୋଗାଯୋଗ କରନ୍ତୁ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">6</span>
                                        Customer ଏବଂ Technician ମଧ୍ୟରେ Company ର ପୂର୍ବ ଅନୁମତି/ନିଶ୍ଚିତକରଣ ବିନା ହେଉଥିବା କୌଣସି Personal Transaction କିମ୍ବା Personal Financial Dealing, <strong>Company ର Official Transaction ଭାବେ ଗଣାଯିବ ନାହିଁ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">7</span>
                                        Company ର ଅନୁମତି ବିନା Customer ଦ୍ୱାରା Technician ଙ୍କୁ କରାଯାଇଥିବା କୌଣସି Personal Payment କିମ୍ବା Transaction ଯୋଗୁଁ ହେଉଥିବା <strong>କ୍ଷତି ପାଇଁ Company/Owner ଦାୟୀ ରହିବେ ନାହିଁ</strong>।
                                    </li>
                                    <li>
                                        <span class="guideline-num">8</span>
                                        ଆପଣଙ୍କ ସୁରକ୍ଷା ପାଇଁ କୌଣସି Payment କରିବା କିମ୍ବା Extra Work କରାଇବା ପୂର୍ବରୁ <strong>Company ସହିତ ନିଶ୍ଚିତ ଭାବେ କଥା ହୁଅନ୍ତୁ</strong>।
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Odia Reward Policy & Official Contact Box -->
                    <div class="col-lg-5">
                        <div class="d-flex flex-column gap-4">

                            <!-- Official Helpline Box -->
                            <div class="official-contact-banner text-center">
                                <h4 class="fw-bold text-dark mb-2">
                                    <i class="bi bi-telephone-inbound-fill text-danger me-2"></i> OFFICIAL CONTACT NUMBER
                                </h4>
                                <p class="text-muted small mb-3">
                                    Service ସମ୍ବନ୍ଧୀୟ କୌଣସି ପ୍ରଶ୍ନ, Payment Confirmation, Extra Work, Complaint କିମ୍ବା Doubt ପାଇଁ ସିଧାସଳଖ ଯୋଗାଯୋଗ କରନ୍ତୁ:
                                </p>
                                <a href="tel:+917752083960" class="official-phone-btn mb-3">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="https://wa.me/917752083960?text=ନମସ୍କାର%20ହଂସରାଜ%20ଏଣ୍ଟରପ୍ରାଇଜେସ୍,%20ମୁଁ%20ସର୍ଭିସ୍/ପେମେଣ୍ଟ%20ନିଶ୍ଚିତ%20କରିବାକୁ%20ଚାହୁଁଛି" class="btn btn-sm btn-success rounded-pill px-3" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> ହ୍ୱାଟ୍ସଆପ୍ ଯାଞ୍ଚ
                                    </a>
                                </div>
                                <div class="mt-3 pt-2 border-top border-warning-subtle small text-dark fw-semibold">
                                    🛡️ ଆପଣଙ୍କ ସୁରକ୍ଷା ଏବଂ ସନ୍ତୁଷ୍ଟି ଆମର ପ୍ରାଥମିକତା। ଆମ Service Center କୁ ବାଛିଥିବାରୁ ଧନ୍ୟବାଦ।
                                </div>
                            </div>

                            <!-- Customer Reporting & Reward Policy -->
                            <div class="guideline-card">
                                <div class="guideline-card-header reward-header">
                                    <h3 class="h5 mb-0 fw-bold">
                                        <i class="bi bi-gift-fill me-2"></i> ଗ୍ରାହକ ରିପୋର୍ଟିଂ ଏବଂ ପୁରସ୍କାର ନୀତି
                                    </h3>
                                </div>
                                <div class="p-4">
                                    <div class="reward-box mb-3">
                                        <h5 class="fw-bold text-success mb-2">
                                            <i class="bi bi-award-fill me-1"></i> ରିପୋର୍ଟ କରିବା ଦ୍ୱାରା ସର୍ଭିସ୍ ଚାର୍ଜ ରେ ରିହାତି
                                        </h5>
                                        <p class="small mb-0 text-dark">
                                            ଯଦି କୌଣସି Technician/Mechanic ଙ୍କ କଥାବାର୍ତ୍ତା, ବ୍ୟବହାର, Personal Payment ମାଗିବା ବା ଅନଧିକୃତ କାର୍ଯ୍ୟ ଉପରେ ସନ୍ଦେହ ହୁଏ:
                                        </p>
                                    </div>

                                    <ul class="list-unstyled mb-3">
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-record-circle-fill text-danger flex-shrink-0 mt-1"></i>
                                            <span><strong>ପ୍ରମାଣ ରେକର୍ଡିଂ କରନ୍ତୁ:</strong> ଆଇନ ଅନୁମତି ଦେଉଥିବା ସ୍ଥାନରେ କଥାବାର୍ତ୍ତା ବା ପ୍ରମାଣ Recording କରି ସିଧାସଳଖ <strong>7752083960</strong> କୁ ପଠାନ୍ତୁ।</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-tags-fill text-success flex-shrink-0 mt-1"></i>
                                            <span><strong>ପୁରସ୍କାର / ରିହାତି:</strong> ସତ୍ୟାପନ ପରେ Company ନିଜ ନୀତି ଅନୁଯାୟୀ ଗ୍ରାହକଙ୍କୁ <strong>Applicable Service Charge ରେ Discount</strong> ପ୍ରଦାନ କରିପାରେ।</span>
                                        </li>
                                        <li class="mb-2 small d-flex gap-2">
                                            <i class="bi bi-exclamation-triangle-fill text-warning flex-shrink-0 mt-1"></i>
                                            <span><strong>କଠୋର କାର୍ଯ୍ୟାନୁଷ୍ଠାନ:</strong> ନିୟମ ଉଲ୍ଲଂଘନ କରୁଥିବା Technician ଉପରେ Disciplinary Action ନେବାର ସମ୍ପୂର୍ଣ୍ଣ ଅଧିକାର Owner/Company ଙ୍କର ରହିବ।</span>
                                        </li>
                                        <li class="small d-flex gap-2">
                                            <i class="bi bi-shield-fill-check text-primary flex-shrink-0 mt-1"></i>
                                            <span><strong>ବିବାଦ କରନ୍ତୁ ନାହିଁ:</strong> Technician ଙ୍କ ସହିତ ଯୁକ୍ତିତର୍କ କରନ୍ତୁ ନାହିଁ। ଉପଲବ୍ଧ ପ୍ରମାଣ ସହିତ ସିଧାସଳଖ Company କୁ <strong>7752083960</strong> ରେ ଜଣାନ୍ତୁ।</span>
                                        </li>
                                    </ul>

                                    <a href="https://wa.me/917752083960?text=ନମସ୍କାର%20ହଂସରାଜ%20ଏଣ୍ଟରପ୍ରାଇଜେସ୍,%20ମୁଁ%20ଟେକ୍ନିସିଆନ୍%20ଙ୍କ%20ସମ୍ବନ୍ଧରେ%20ପ୍ରମାଣ%20ସହ%20ରିପୋର୍ଟ%20କରିବାକୁ%20ଚାହୁଁଛି" class="btn btn-outline-success w-100 rounded-pill fw-semibold btn-sm" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> ପ୍ରମାଣ ସହ ହ୍ୱାଟ୍ସଆପ୍ ରେ ରିପୋର୍ଟ କରନ୍ତୁ
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
