$('#myform').validate({
    rules: {
        email: 'required',
        emailConfirm: {
            equalTo: '#email'
        }
    }
});