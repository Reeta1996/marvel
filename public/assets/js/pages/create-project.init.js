function keyToText(){return{step1:"Project Details Review",step2:"Client Details Review",step3:"Documents Review","validation-projectname":"Project Name","validation-projectowner":"Project Owner","validation-start":"Project Start Date","validation-end":"Project End Date","validation-budget":"Project Budget","validation-member":"Project Team","validation-tags":"PRoject Tags","validation-desc":"Project Description","validation-clientname":"Client Name","validation-clientaddress":"Client Address","validation-email":"Client Email","validation-personname":"Client Contact Person","validation-company":"Client Description","validation-logo":"Client Logo","validation-documents":"Documents"}}function initiliazeSmartWizard(o,r,l,s){$("#rootwizard").bootstrapWizard({tabClass:"nav nav-pills",nextSelector:".next",previousSelector:".previous",onTabShow:function(e,t,i){3==i&&($(".next > a").removeClass(),$(".next > a").addClass("btn btn-success"),$(".next > a").text("Finish"))},onNext:function(e,t,i){if($("#step-"+i).trigger("click"),1==i)return r.step1.data["validation-desc"]=CKEDITOR.instances["project-desc"].getData(),r.step1.valid;if(2==i){r.step2.data["validation-company"]=CKEDITOR.instances["company-desc"].getData();var a=[];return l&&l.files.length&&(l.files.forEach(function(e,t){a.push(e.name)}),r.step2.data["validation-logo"]=a.join(", ")),r.step2.valid}if(3==i){var n=[];s&&s.files.length?(s.files.forEach(function(e,t){n.push(e.name)}),r.step3.data["validation-documents"]=n.join(", ")):r.step3.data["validation-documents"]=[],generateHTML(r,o)}}})}function generateHTML(e,t){$("#review-data").html("");var i=$("#review-data");for(var a in e){var n=document.createElement("div");n.classList.add("project-review-list");var o=document.createElement("h5");o.classList.add("font-size-16","mb-4","font-weight-600"),o.innerHTML=t[a],$(n).append(o);var r="";for(var l in e[a].data)r+='<div class="row"><div class="col-md-4 col-lg-3 col-xl-2"> <h6>'+t[l]+'</h6></div><div class="col-md-8 col-lg-9 col-xl-10"> <div class="html">'+e[a].data[l]+"</div></div></div>";var s=$.parseHTML(r);$(n).append(s),$(i).append(n)}}function validateStep1(a){return $("#project-details").validate({focusInvalid:!1,rules:{"validation-projectname":{required:!0},"validation-projectowner":{required:!0},"validation-start":{required:!0},"validation-end":{required:!0},"validation-budget":{required:!0}},errorPlacement:function(e,t){return $(t).parents(".ckeditor").length||$(t).siblings(".validation-error").removeClass("d-none"),!0},highlight:function(e){var t=$(e).parents(".form-group");$(e).parents(".ckeditor").length||t.addClass("invalid-field"),a.step1.valid=!1},unhighlight:function(e){$(e).parents(".form-group").removeClass("invalid-field"),$(e).parents(".ckeditor").length||$(e).siblings(".validation-error").addClass("d-none")},submitHandler:function(e){a.step1.valid=!0;var t=$(e).serializeArray(),i={};$(t).each(function(e,t){i[t.name]=t.value}),a.step1.data=i}}),!!$("#project-details").valid()}function validateStep2(a,e,t){return $("#client-details").validate({focusInvalid:!1,rules:{"validation-clientname":{required:!0},"validation-clientaddress":{required:!0},"validation-email":{required:!0,email:!0},"validation-personname":{required:!0}},errorPlacement:function(e,t){return $(t).parents(".ckeditor").length||$(t).siblings(".validation-error").removeClass("d-none"),!0},highlight:function(e){var t=$(e).parents(".form-group");$(e).parents(".ckeditor").length||t.addClass("invalid-field"),a.step2.valid=!1},unhighlight:function(e){$(e).parents(".form-group").removeClass("invalid-field"),$(e).parents(".ckeditor").length||$(e).siblings(".validation-error").addClass("d-none")},submitHandler:function(e){a.step2.valid=!0;var t=$(e).serializeArray(),i={};$(t).each(function(e,t){i[t.name]=t.value}),a.step2.data=i}}),!!$("#client-details").valid()}function initializeCKEditor(){$("#project-desc").length&&CKEDITOR.replace("project-desc.html"),$("#company-desc").length&&CKEDITOR.replace("company-desc.html")}function initializeCompanyLogoDropzone(){return new Dropzone(document.getElementById("companylogo"),{url:"http://matrrdigital.com/themes/dropzone",previewsContainer:"#client-file-previews",previewTemplate:$("#clientPreviewTemplate").html(),success:function(e,t){var i=t;e.previewElement.classList.add("dz-success"),console.log("Successfully uploaded :"+i)},error:function(e,t){console.log("response",t),e.previewElement.classList.add("dz-error")}})}function initializeProjectFilesDropzone(){return new Dropzone(document.getElementById("projectfiles"),{url:"http://matrrdigital.com/themes/dropzone",previewsContainer:"#project-file-previews",previewTemplate:$("#projectPreviewTemplate").html(),success:function(e,t){var i=t;e.previewElement.classList.add("dz-success"),console.log("Successfully uploaded :"+i)},error:function(e,t){console.log("response",t),e.previewElement.classList.add("dz-error")}})}!function(e){var t={step1:{data:{},valid:Dropzone.autoDiscover=!1},step2:{data:{},valid:!1},step3:{data:{},valid:!0}},i=keyToText();e("#startdate").length&&e("#startdate").flatpickr({disableMobile:!0}),e("#enddate").length&&e("#enddate").flatpickr({disableMobile:!0}),e("#projectTags").length&&e("#projectTags").tagsinput({trimValue:!0}),e("#projectTeam").length&&e("#projectTeam").select2(),initializeCKEditor();var a=initializeCompanyLogoDropzone(),n=initializeProjectFilesDropzone();e("#step-1").on("click",function(){validateStep1(t)}),e("#step-2").on("click",function(){validateStep2(t)}),initiliazeSmartWizard(i,t,a,n)}(jQuery);