<div class="ctf-fb-extensions-pp-ctn sb-fs-boss ctf-fb-center-boss" v-if="viewsActive.extensionsPopupElement != null && viewsActive.extensionsPopupElement != false">
	<div class="ctf-fb-extensions-popup ctf-fb-popup-inside" v-if="viewsActive.extensionsPopupElement != null && viewsActive.extensionsPopupElement != false" :data-getext-view="viewsActive.extensionsPopupElement">

        <div class="ctf-fb-popup-cls" @click.prevent.default="activateView('extensionsPopupElement')">
            <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#141B38"></path>
            </svg>
        </div>
        <div>
            <div class="ctf-fb-extpp-top ctf-fb-fs">
                <div class="ctf-fb-extpp-info">
                    <div v-if="iscustomizerScreen && customizerScreens.popupBackButton.includes(viewsActive.extensionsPopupElement)" class="ctf-fb-slctf-back ctf-fb-hd-btn ctf-btn-grey" @click.prevent.default="viewsActive.extensionsPopupElement == 'feedTemplates' ? activateView('feedtemplatesPopupCustomizer')  : activateView('feedtypesPopup')">
<svg width="7" height="11" viewbox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.3415 1.18184L5.1665 0.00683594L0.166504 5.00684L5.1665 10.0068L6.3415 8.83184L2.52484 5.00684L6.3415 1.18184Z" fill="#141B38"></path></svg> <span>Back</span>
</div>
                    <div class="ctf-fb-extpp-head ctf-fb-fs"><h2 v-html="extensionsPopup[viewsActive.extensionsPopupElement].heading"></h2></div>
                    <div class="ctf-fb-extpp-desc ctf-fb-fs sb-caption" v-html="extensionsPopup[viewsActive.extensionsPopupElement].description"></div>
                    <div v-if="extensionsPopup[viewsActive.extensionsPopupElement].popupContentBtn" v-html="extensionsPopup[viewsActive.extensionsPopupElement].popupContentBtn"></div>
                </div>
                <div class="ctf-fb-extpp-img" v-html="extensionsPopup[viewsActive.extensionsPopupElement].img">
                </div>
            </div>
            <div class="ctf-fb-extpp-bottom ctf-fb-fs">
                <div v-if="typeof extensionsPopup[viewsActive.extensionsPopupElement].bullets !== 'undefined'" class="ctf-extension-bullets">
                    <h4>{{extensionsPopup[viewsActive.extensionsPopupElement].bullets.heading}}</h4>
                    <div class="ctf-extension-bullet-list">
                        <div class="ctf-extension-single-bullet" v-for="bullet in extensionsPopup[viewsActive.extensionsPopupElement].bullets.content">
                            <svg width="4" height="4" viewbox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="4" height="4" fill="#0096CC"></rect>
                            </svg>
                            <span class="sb-small-p">{{bullet}}</span>
                        </div>
                    </div>
                </div>
                <div class="ctf-fb-extpp-btns ctf-fb-fs">
                    <a class="ctf-fb-extpp-get-btn ctf-btn-orange" :href="extensionsPopup[viewsActive.extensionsPopupElement].buyUrl" target="_blank">{{genericText.upgrade}}</a>
                </div>
            </div>
        </div>
	</div>
</div>