(function($) {
    'use strict';
    $(function() {
      // validate the comment form when it is submitted
      $("#commentForm").validate({
        errorPlacement: function(label, element) {
          label.addClass('mt-2 text-danger');
          label.insertAfter(element);
        },
        highlight: function(element, errorClass) {
          $(element).parent().addClass('has-danger')
          $(element).addClass('form-control-danger')
        }
      });
      // validate signup form on keyup and submit
      var locale = $('html').attr('lang');

      $("#signupForm").validate({
        rules: {
          firstname: "required",
          lastname: "required",
          name: 'required',
          gender: 'required',
          country: 'required',
          address: 'required',
          city: 'required',
          about: 'required',
          account_type: 'required',
          phone: 'required',
          school: 'required',
          type: 'required',
          users: 'required',
          role: 'required',
          status: 'required',
          username: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
          topic: {
            required: "#newsletter:checked",
            minlength: 2
          },
          agree: "required"
        },
        messages: {
          firstname: (locale == 'ar')?"اختبار":"Please enter firstname",
          lastname: (locale == 'ar')?"اختبار":"Please enter lastname",
          name: (locale == 'ar')?"أدخل الاسم":"Please enter name",
          gender: (locale == 'ar')?"أدخل الجنس":"Please enter gender",
          phone: (locale == 'ar')?"أدخل التليفون":"Please enter phone",
          country: (locale == 'ar')?"أدخل الدوله":"Please enter country",
          address: (locale == 'ar')?"أدخل العنوان":"Please enter address",
          city: (locale == 'ar')?"أدخل المدينة":"Please enter city",
          about: (locale == 'ar')?"أدخل النبذه المختصرة":"Please enter about",
          account_type: (locale == 'ar')?"أدخل نوع الحساب":"Please enter account type",
          type: (locale == 'ar')?"أدخل النوع":"Please enter type",
          school: (locale == 'ar')?"أدخل المدرسة":"Please enter school",
          users: (locale == 'ar')?"أدخل المستخدم":"Please enter user",
          role: (locale == 'ar')?"أدخل الوظيفه":"Please enter role",
          status: (locale == 'ar')?"أدخل الحاله":"Please enter status",
          username: {
            required: (locale == 'ar')?"اختبار":"Please entera username",
            minlength: " username must consist of at least 2 characters"
          },
          password: {
            required: (locale == 'ar')?"اختبار":"Please provide a password",
            minlength: " password must be at least 5 characters long"
          },
          confirm_password: {
            required: (locale == 'ar')?"اختبار":"Please provide a password",
            minlength: (locale == 'ar')?"اختبار":" password must be at least 5 characters long",
            equalTo: (locale == 'ar')?"اختبار":"Please enter the same password as above"
          },
          email: (locale == 'ar')?"اختبار":"Please enter a valid email address",
          agree: (locale == 'ar')?"اختبار":"Please accept our policy",
          topic: (locale == 'ar')?"اختبار":"Please select at least 2 topics"
        },
        errorPlacement: function(label, element) {
          label.addClass('mt-2 text-danger');
          label.insertAfter(element);
        },
        highlight: function(element, errorClass) {
          $(element).parent().addClass('has-danger')
          $(element).addClass('form-control-danger')
        }
      });
      // propose username by combining first- and lastname
      $("#username").focus(function() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        if (firstname && lastname && !this.value) {
          this.value = firstname + "." + lastname;
        }
      });
      //code to hide topic selection, disable for demo
      var newsletter = $("#newsletter");
      // newsletter topics are optional, hide at first
      var inital = newsletter.is(":checked");
      var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
      var topicInputs = topics.find("input").attr("disabled", !inital);
      // show when newsletter is checked
      newsletter.on("click", function() {
        topics[this.checked ? "removeClass" : "addClass"]("gray");
        topicInputs.attr("disabled", !this.checked);
      });
    });
  })(jQuery);
