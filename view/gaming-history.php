<section class="SectionContent" style="background: #fff">
   <div class="TransactionHistoryContent ComponentLayout InstanceOperatorMyCasinoContent Layout">
      <ul class="ComponentTabsHeader InstanceOperatorMyCasinoTabsHeader TabsHeader List ListUnordered">
         <li class="ListItem">
            <div class="ComponentTabsItemHeader InstanceOperatorMyCasinoTabsLimitsItem TabItem"><a class="ComponentAnchor IsActive ComponentButton InstanceOperatorMyCasinoTabsLimitsButton Button Anchor" href="/tr/my-casino/gaming-history"><span class="AnchorText">Oyun Geçmişi</span></a></div>
         </li>
         <li class="ListItem">
            <div class="ComponentTabsItemHeader InstanceOperatorMyCasinoTabsLimitsItem TabItem"><a class="ComponentAnchor ComponentButton InstanceOperatorMyCasinoTabsLimitsButton Button Anchor" href="/tr/my-casino/payment-history/deposit"><span class="AnchorText">Ödeme Geçmişi</span></a></div>
         </li>
      </ul>
      <div class="ComponentTabsContent">
         <div class="TransactionHistoryWrapper TabItemContent">
            <div class="ComponentLayout InstanceMycasinoHistoryLayout Layout">
               <h1 class="ComponentTitle InstanceTransactionHistoryTitle Title">Bahis Geçmişi</h1>
               <p class="ComponentText InstanceOperatorGamblingTimeDisclaimer Text">Bu tablodaki bilgiler geçici olarak 15 dakikaya kadar gecikmeli yansıyor olabilir, bilgilerinize.</p>
               <div class="TransactionHistoryNWAContainer TransactionHistoryContainer">
                  <button class="ComponentButton InstanceCloseFilter Button" type="button">
                     <span class="ComponentIcon InstanceOperatorIconFilter ButtonIconStart Icon">
                        <span class="SvgIcon MainIcon CustomHtml">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <g fill="none" transform="translate(4 5)">
                                 <path fill="#818181" d="M5 13h11v-1H5v1zM5 2v1h11V2H5zm8 6h3V7h-3v1zM0 13h3v-1H0v1zM0 2v1h3V2H0zm0 6h11V7H0v1z"></path>
                                 <circle cx="4" cy="2.5" r="1.5" stroke="#818181"></circle>
                                 <circle cx="4" cy="12.5" r="1.5" stroke="#818181"></circle>
                                 <circle cx="12" cy="7.5" r="1.5" stroke="#818181"></circle>
                              </g>
                           </svg>
                        </span>
                        <span class="ButtonText">Filtre</span>
                     </span>
                  </button>
                  <div class="NoOfItemsToDisplay">
                     <span class="NoOfItemsToDisplayMessage">Göster</span>
                     <ul class="TransPaginationOptions List ListUnordered">
                        <li class="TransPaginationItem ListItem Active "><span class="TransPaginationLabel">10</span></li>
                        <li class="TransPaginationItem ListItem  "><button class="TransPaginationButton Button" type="button">25</button></li>
                        <li class="TransPaginationItem ListItem  "><button class="TransPaginationButton Button" type="button">50</button></li>
                     </ul>
                  </div>
                  <div class="ComponentTransactionFilter InstanceTransactionHistory TransFilterContent" tabindex="-1">
                     <form class="Form" novalidate="">
                        <fieldset class="TransFilterFieldSet FormFieldSet">
                           <div class="InputContainer FormLabel DatePickerWrapper">
                              <div class="LabelWrap"><label for="startDateID"><span class="LabelText">Başlangıç Tarihi</span><span class="Req">*</span></label></div>
                              <div class="InputWrap">
                                 <span class="ComponentIcon InstanceCalendar FormInputIconStart Icon">
                                    <span class="SvgIcon MainIcon CustomHtml">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20">
                                          <path d="M15.7 3.4h-.5v-.6c0-1.2-1-2.1-2.1-2.1S11 1.6 11 2.8v.6H7v-.6C7 1.6 6 .7 4.9.7s-2.1 1-2.1 2.1v.6h-.5C1 3.4 0 4.4 0 5.7v11.5c0 1.3 1 2.3 2.3 2.3h13.4c1.3 0 2.3-1 2.3-2.3V5.7c0-1.3-1-2.3-2.3-2.3zm-3.2-.6c0-.3.3-.6.6-.6s.6.3.6.6v3c0 .3-.3.6-.6.6s-.6-.3-.6-.6v-3zm-8.2 0c0-.3.3-.6.6-.6s.6.3.6.6v3c0 .3-.3.6-.6.6s-.6-.2-.6-.6v-3zm12.2 14.4c0 .4-.4.8-.8.8H2.3c-.4 0-.8-.4-.8-.8V7.9h15v9.3z"></path>
                                       </svg>
                                    </span>
                                 </span>
                                 <div class="react-datepicker-wrapper">
                                    <div class="react-datepicker__input-container"><input id="startDateID" name="startDate" placeholder="Tarih seç" autocomplete="off" class="ComponentDatePicker FormInput InstanceTransactionFilterFrom" readonly="" tabindex="-1" value=""></div>
                                 </div>
                              </div>
                           </div>
                           <div class="InputContainer FormLabel DatePickerWrapper">
                              <div class="LabelWrap"><label for="endDateID"><span class="LabelText">Bitiş Tarihi</span><span class="Req">*</span></label></div>
                              <div class="InputWrap">
                                 <span class="ComponentIcon InstanceCalendar FormInputIconStart Icon">
                                    <span class="SvgIcon MainIcon CustomHtml">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20">
                                          <path d="M15.7 3.4h-.5v-.6c0-1.2-1-2.1-2.1-2.1S11 1.6 11 2.8v.6H7v-.6C7 1.6 6 .7 4.9.7s-2.1 1-2.1 2.1v.6h-.5C1 3.4 0 4.4 0 5.7v11.5c0 1.3 1 2.3 2.3 2.3h13.4c1.3 0 2.3-1 2.3-2.3V5.7c0-1.3-1-2.3-2.3-2.3zm-3.2-.6c0-.3.3-.6.6-.6s.6.3.6.6v3c0 .3-.3.6-.6.6s-.6-.3-.6-.6v-3zm-8.2 0c0-.3.3-.6.6-.6s.6.3.6.6v3c0 .3-.3.6-.6.6s-.6-.2-.6-.6v-3zm12.2 14.4c0 .4-.4.8-.8.8H2.3c-.4 0-.8-.4-.8-.8V7.9h15v9.3z"></path>
                                       </svg>
                                    </span>
                                 </span>
                                 <div class="react-datepicker-wrapper">
                                    <div class="react-datepicker__input-container"><input id="endDateID" name="endDate" placeholder="Tarih seç" autocomplete="off" class="ComponentDatePicker FormInput InstanceTransactionFilterTo" readonly="" tabindex="-1" value="05/03/2025"></div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                        <button class="SubmitButton TransFilterButton PositionRelative E2E-submitButton Button" title="Filtre" type="submit"><span class="ButtonText">Filtre</span></button>
                     </form>
                  </div>
                  <p class="Message Info">Hesabın işlem geçmişi bulunmamaktadır.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>