{
"form": "<form autocomplete=\"off\" novalidate=\"novalidate\" class=\"or clearfix\" dir=\"ltr\" id=\"tutorial_cloned\"><!--This form was created by transforming a OpenRosa-flavored (X)Form using an XSLT sheet created by Enketo LLC.--><section class=\"form-logo\"/><h3 id=\"form-title\">Auro Form</h3>\n  \n  \n    <label class=\"question non-select \"><span lang=\"\" class=\"question-label active\">What's your name?</span><span class=\"required\">*</span><input type=\"text\" name=\"/tutorial_cloned/name\" required=\"required\" data-type-xml=\"string\"/><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span><span class=\"or-required-msg active\" lang=\"\" data-i18n=\"constraint.required\">This field is required</span></label>\n    <label class=\"question non-select \"><span lang=\"\" class=\"question-label active\">How old are you?</span><span class=\"required\">*</span><input type=\"number\" name=\"/tutorial_cloned/age\" required=\"required\" data-constraint=\" /tutorial_cloned/age  &gt; 0 and  /tutorial_cloned/age  &lt; 120\" data-type-xml=\"int\"/><span lang=\"\" class=\"or-constraint-msg active\">That's not a valid age!</span><span class=\"or-required-msg active\" lang=\"\" data-i18n=\"constraint.required\">This field is required</span></label>\n    <fieldset class=\"question simple-select \"><fieldset><legend><span lang=\"\" class=\"question-label active\">Gender</span></legend><div class=\"option-wrapper\"><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/gender\" data-name=\"/tutorial_cloned/gender\" value=\"male\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">Male</span></label><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/gender\" data-name=\"/tutorial_cloned/gender\" value=\"female\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">Female</span></label></div></fieldset><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></fieldset>\n    <label class=\"question non-select \"><span lang=\"\" class=\"question-label active\">Take a picture</span><input type=\"file\" name=\"/tutorial_cloned/photo\" data-type-xml=\"binary\" accept=\"image/*\"/><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></label>\n    <label class=\"question non-select \"><span lang=\"\" class=\"question-label active\">Date</span><input type=\"date\" name=\"/tutorial_cloned/date\" data-type-xml=\"date\"/><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></label>\n    <label class=\"question non-select \"><span lang=\"\" class=\"question-label active\">Where are you?</span><span lang=\"\" class=\"or-hint active\">You need to be outside for your GPS to work.</span><input type=\"text\" name=\"/tutorial_cloned/location\" data-type-xml=\"geopoint\"/><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></label>\n    <fieldset class=\"question simple-select \"><fieldset><legend><span lang=\"\" class=\"question-label active\">Do you like pizza?</span></legend><div class=\"option-wrapper\"><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/pizza_fan\" data-name=\"/tutorial_cloned/pizza_fan\" value=\"yes\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">Yes</span></label><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/pizza_fan\" data-name=\"/tutorial_cloned/pizza_fan\" value=\"no\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">No</span></label></div></fieldset><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></fieldset>\n    <label class=\"note or-branch pre-init non-select \"><span lang=\"\" class=\"question-label active\">That's weird!</span><input type=\"text\" name=\"/tutorial_cloned/pizza_hater\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'no'\" data-type-xml=\"string\" readonly=\"readonly\"/></label>\n    <fieldset class=\"question simple-select or-branch pre-init \"><fieldset><legend><span lang=\"\" class=\"question-label active\">Best pie?</span></legend><div class=\"option-wrapper\"><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/pizza_type\" data-name=\"/tutorial_cloned/pizza_type\" value=\"nyc\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">New York think crust!</span></label><label class=\"\"><input type=\"radio\" name=\"/tutorial_cloned/pizza_type\" data-name=\"/tutorial_cloned/pizza_type\" value=\"chitown\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select1\"/><span lang=\"\" class=\"option-label active\">Chicago deep dish!</span></label></div></fieldset><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></fieldset>\n    <fieldset class=\"question simple-select or-branch pre-init \"><fieldset><legend><span lang=\"\" class=\"question-label active\">Favorite toppings</span></legend><div class=\"option-wrapper\"><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"cheese\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Cheese</span></label><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"pepperoni\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Pepperoni</span></label><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"sausauge\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Sausauge</span></label><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"green_peppers\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Green Peppers</span></label><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"mushrooms\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Mushrooms</span></label><label class=\"\"><input type=\"checkbox\" name=\"/tutorial_cloned/favorite_toppings\" value=\"anchovies\" data-relevant=\" /tutorial_cloned/pizza_fan  = 'yes'\" data-type-xml=\"select\"/><span lang=\"\" class=\"option-label active\">Anchovies :)</span></label></div></fieldset><span class=\"or-constraint-msg active\" lang=\"\" data-i18n=\"constraint.invalid\">Value not allowed</span></fieldset>\n    <label class=\"note non-select \"><span lang=\"\" class=\"question-label active\">Thanks for your time <span class=\"or-output\" data-value=\" /tutorial_cloned/name \"/>!</span><input type=\"text\" name=\"/tutorial_cloned/thanks\" data-type-xml=\"string\" readonly=\"readonly\"/></label>\n  \n<fieldset id=\"or-preload-items\" style=\"display:none;\"><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/start_time\" data-preload=\"timestamp\" data-preload-params=\"start\" data-type-xml=\"dateTime\"/></label><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/end_time\" data-preload=\"timestamp\" data-preload-params=\"end\" data-type-xml=\"dateTime\"/></label><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/today\" data-preload=\"date\" data-preload-params=\"today\" data-type-xml=\"date\"/></label><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/imei\" data-preload=\"property\" data-preload-params=\"deviceid\" data-type-xml=\"string\"/></label><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/phonenumber\" data-preload=\"property\" data-preload-params=\"phonenumber\" data-type-xml=\"string\"/></label></fieldset><fieldset id=\"or-calculated-items\" style=\"display:none;\"><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/meta/instanceID\" data-calculate=\"concat('uuid:', uuid())\" data-type-xml=\"string\"/></label><label class=\"calculation non-select \"><input type=\"hidden\" name=\"/tutorial_cloned/formhub/uuid\" data-calculate=\"'48909d42f67a4aeabcfd37b487e737e1'\" data-type-xml=\"string\"/></label></fieldset></form>","model": "<model><instance>\n        <tutorial_cloned id=\"tutorial_cloned\" version=\"201506270948\">\n          <formhub>\n            <uuid/>\n          </formhub>\n          <name/>\n          <age/>\n          <gender/>\n          <photo/>\n          <date/>\n          <location/>\n          <pizza_fan/>\n          <pizza_hater/>\n          <pizza_type/>\n          <favorite_toppings/>\n          <thanks/>\n          <start_time/>\n          <end_time/>\n          <today/>\n          <imei/>\n          <phonenumber/>\n          <meta>\n            <instanceID/>\n          </meta>\n        </tutorial_cloned>\n      </instance></model>"
}