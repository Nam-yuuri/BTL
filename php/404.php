<body id="t" style="font-family: 'Segoe UI', Tahoma, sans-serif; font-size: 75%" jstcache="0" class="neterror">
  <div id="main-frame-error" class="interstitial-wrapper" jstcache="0">
    <div id="main-content" jstcache="0">
      <div class="icon icon-generic" jseval="updateIconClass(this.classList, iconClass)" alt="" jstcache="1"></div>
      <div id="main-message" jstcache="0">
        <h1 jstcache="0">
          <span jsselect="heading" jsvalues=".innerHTML:msg" jstcache="10">Không thể truy cập trang web này</span>
          <a id="error-information-button" class="hidden" onclick="toggleErrorInformationPopup();" jstcache="0"></a>
        </h1>
        <p jsselect="summary" jsvalues=".innerHTML:msg" jstcache="2"><strong jscontent="hostName" jstcache="23">localhost</strong> đã từ chối kết nối.</p>
        <!--The suggestion list and error code are normally presented inline,
          in which case error-information-popup-* divs have no effect. When
          error-information-popup-container has the use-popup-container class, this
          information is provided in a popup instead.-->
        <div id="error-information-popup-container" jstcache="0">
          <div id="error-information-popup" jstcache="0">
            <div id="error-information-popup-box" jstcache="0">
              <div id="error-information-popup-content" jstcache="0">
                <div id="suggestions-list" style="" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="17">
                  <p jsvalues=".innerHTML:suggestionsSummaryListHeader" jstcache="19">Hãy thử:</p>
                  <ul jsvalues=".className:suggestionsSummaryList.length == 1 ? 'single-suggestion' : ''" jstcache="20" class="">
                    <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="22" jsinstance="0">Kiểm tra kết nối</li><li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="22" jsinstance="*1"><a href="#buttons" onclick="toggleHelpBox()" jstcache="0">Kiểm tra proxy và tường lửa</a></li>
                  </ul>
                </div>
                <div class="error-code" jscontent="errorCode" jstcache="18">ERR_CONNECTION_REFUSED</div>
                <p id="error-information-popup-close" jstcache="0">
                  <a class="link-button" jscontent="closeDescriptionPopup" onclick="toggleErrorInformationPopup();" jstcache="21">null</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="diagnose-frame" class="hidden" jstcache="0"></div>
        <div id="download-links-wrapper" class="hidden" jstcache="0">
          <div id="download-link-wrapper" jstcache="0">
            <a id="download-link" class="link-button" onclick="downloadButtonClick()" jsselect="downloadButton" jscontent="msg" jsvalues=".disabledText:disabledMsg" jstcache="7" style="display: none;">
            </a>
          </div>
          <div id="download-link-clicked-wrapper" class="hidden" jstcache="0">
            <div id="download-link-clicked" class="link-button" jsselect="downloadButton" jscontent="disabledMsg" jstcache="12" style="display: none;">
            </div>
          </div>
        </div>
        <div id="save-page-for-later-button" class="hidden" jstcache="0">
          <a class="link-button" onclick="savePageLaterClick()" jsselect="savePageLater" jscontent="savePageMsg" jstcache="11" style="display: none;">
          </a>
        </div>
        <div id="cancel-save-page-button" class="hidden" onclick="cancelSavePageClick()" jsselect="savePageLater" jsvalues=".innerHTML:cancelMsg" jstcache="5" style="display: none;">
        </div>
        <div id="offline-content-list" class="list-hidden" hidden="" jstcache="0">
          <div id="offline-content-list-visibility-card" onclick="toggleOfflineContentListVisibility(true)" jstcache="0">
            <div id="offline-content-list-title" jsselect="offlineContentList" jscontent="title" jstcache="13" style="display: none;">
            </div>
            <div jstcache="0">
              <div id="offline-content-list-show-text" jsselect="offlineContentList" jscontent="showText" jstcache="15" style="display: none;">
              </div>
              <div id="offline-content-list-hide-text" jsselect="offlineContentList" jscontent="hideText" jstcache="16" style="display: none;">
              </div>
            </div>
          </div>
          <div id="offline-content-suggestions" jstcache="0"></div>
          <div id="offline-content-list-action" jstcache="0">
            <a class="link-button" onclick="launchDownloadsPage()" jsselect="offlineContentList" jscontent="actionText" jstcache="14" style="display: none;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="buttons" class="nav-wrapper suggested-left" jstcache="0">
      <div id="control-buttons" jstcache="0">
        <button id="reload-button" class="blue-button text-button" onclick="reloadButtonClick(this.url);" jsselect="reloadButton" jsvalues=".url:reloadUrl" jscontent="msg" jstcache="6">Tải lại</button>
        <button id="download-button" class="blue-button text-button" onclick="downloadButtonClick()" jsselect="downloadButton" jscontent="msg" jsvalues=".disabledText:disabledMsg" jstcache="7" style="display: none;">
        </button>
      </div>
      <button id="details-button" class="secondary-button text-button small-link" onclick="detailsButtonClick(); toggleHelpBox()" jscontent="details" jsdisplay="(suggestionsDetails &amp;&amp; suggestionsDetails.length > 0) || diagnose" jsvalues=".detailsText:details; .hideDetailsText:hideDetails;" jstcache="3">Chi tiết</button>
    </div>
