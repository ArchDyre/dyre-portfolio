// Change active state of `Nav`
$("#toggle_navbar a").each(function(){

    if (this.innerHTML != document.title){

        this.classList.remove('active');
        $(this).removeClass('active');

    }else if(this.innerHTML == document.title){

        this.classList.add('active');
        $(this).addClass('active');
    }

});