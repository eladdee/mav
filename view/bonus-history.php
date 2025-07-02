<section class="SectionContent " style="background: #fff">
   <div class="ComponentLayout InstanceBonusHistoryLayout Layout">
      <h1 class="ComponentTitle InstanceBonusHistoryTitle Title">Geçmiş Bonuslar</h1>
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
         <div class="ComponentListTransactionHistory InstanceTransactionHistory TransHistoryContainer">
            <div class="TransHistoryList">
               <div class="TransHistoryTitle"><span class="TransHistoryBonusName">Bonus Adı</span><span class="TransHistoryAmount">Miktar</span><span class="TransHistoryType">Tip</span><span class="TransHistoryTitleStatus">Durum</span><span class="TransHistoryGrantedDate">Eklenme Tarihi</span></div>
               <ul class="List ListUnordered">
                  <li class="TransHistoryItem TransActive ListItem">
                     <div class="TransHistoryBonusName"><span class="TransHistoryDescriptionTxt">JOJOBET - Kombine Ekstra Oran</span></div>
                     <div class="TransHistoryAmount"><span class="TransHistoryAmountTxt"><span class="AmountSign"></span>-</span></div>
                     <div class="TransHistoryType"><span class="TransHistoryDescriptionTxt">oddsBoost</span></div>
                     <div class="TransHistoryStatus"><span class="TransHistoryStatusTxt">Aktif</span></div>
                     <div class="TransHistoryGrantedDate"><span class="TransHistoryDateTxt">05/03/2025</span><span class="TransHistoryHours">13:38</span></div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="PaginationWrapperNWA"><button class="PaginationButton PreviousPage" disabled="" type="button">&lt;</button><button class="PaginationButton NextPage" disabled="" type="button">&gt;</button></div>
      </div>
   </div>
</section>