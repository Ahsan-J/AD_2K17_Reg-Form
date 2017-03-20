$("#Reg-Form").submit(function(e){
    if(!($("#inputName").val()&& $("#inputFatherName").val()&& $("#Program").val()&& $("#Time").val()&& $("#Year").val()))
    {
        e.preventDefault();
    }
    else{
        $("#submit-btn").attr('disabled','disabled');
    }

});