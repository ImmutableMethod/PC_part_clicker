var frmvalidator  = new Validator("register");

frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("firstName","req","Please provide your first name");
frmvalidatior.addValidation("lastName", "req","Please proved your last name");


frmvalidator.addValidation("email","req","Please provide your email address");

frmvalidator.addValidation("email","email","Please provide a valid email address");

frmvalidator.addValidation("username","req","Please provide a username");

frmvalidator.addValidation("password","req","Please provide a password");
