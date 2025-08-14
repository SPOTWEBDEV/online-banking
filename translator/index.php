<style>
         #google_translate_element {
                  margin-top: 10px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  font-size: 16px;
                  color: #333;
         }

         /* Hide the original Google Translate toolbar */
         .goog-te-banner-frame.skiptranslate {
                  /* display: none !important; */
         }

         body {
                  top: 0px !important;
         }

         .goog-te-gadget-simple {
                  background-color: #f8f9fa;
                  border: 1px solid #ddd;
                  border-radius: 5px;
                  padding: 5px 10px;
                  display: inline-block;
                  cursor: pointer;
         }

         .goog-te-gadget-simple .goog-te-menu-value {
                  color: #007bff;
                  font-weight: bold;
         }

         .goog-te-gadget-simple .goog-te-menu-value span {
                  /* display: none; */
         }

         .goog-te-gadget-simple .goog-te-menu-value:after {
                  content: '▼';
                  margin-left: 5px;
                  color: #007bff;
                  font-size: 12px;
         }

         .goog-te-menu-frame {
                  border: none !important;
                  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                  border-radius: 5px;
         }

         .goog-te-menu2 {
                  background-color: #f8f9fa !important;
                  border-radius: 5px !important;
         }

         .goog-te-menu2 a {
                  color: #007bff !important;
                  text-decoration: none !important;
                  padding: 5px 10px !important;
                  display: block;
                  font-weight: normal !important;
         }

         .goog-te-menu2 a:hover {
                  background-color: #007bff !important;
                  color: #fff !important;
                  border-radius: 5px !important;
         }
</style>

<!-- <div id="google_translate_element"></div> -->

<!-- Google Translate Widget -->
<script>
         // Set cookie to auto-translate from English to Portuguese
         document.cookie = "googtrans=/en/pt-PT; path=/";

         function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                           pageLanguage: 'en',
                           includedLanguages: 'en,pt-PT',
                           layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                  }, 'google_translate_element');
         }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


