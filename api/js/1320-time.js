$(document).ready(function() {

    var IMG_PATH = 'http://api.1320time.net/assets/images/';
    var seconds_in_day = 1000 * 60 * 60 * 24;
    var doot = new Date(2013,06,25);        
    //var today = new Date(2013,07,30);    
    var doot_kin = 163;
    var start_glyph = 65;
    var today = new Date(); 
    var days_from_doot;     
    var date = new Array();
    var kin = new Array();  
    var oracle = new Array();  
 

    get_days_from_doot = function get_days_from_doot(day) {

        day.setDate(day.getDate());    
        day.setHours(1);        

        var difference = Math.abs(doot.getTime() - day.getTime());
        return Math.round(difference/seconds_in_day);

    }

    function get_oracle() {        
        oracle['analog'] = (19 - kin['glyph_num']) % 20;
        oracle['challenge'] = (10 + kin['glyph_num']) % 20;      
        oracle['occult'] = (21 - kin['glyph_num']) % 20; 

        if(kin['tone_num'] == 1) { oracle['guide'] = kin['glyph_num'];} 
        if(kin['tone_num'] == 6) { oracle['guide'] = kin['glyph_num'];}
        if(kin['tone_num'] == 11) { oracle['guide'] = kin['glyph_num'];}
        if(kin['tone_num'] == 2)oracle['guide'] = kin['glyph_num'] + 12;
        if(kin['tone_num'] == 7)oracle['guide'] = kin['glyph_num'] + 12;
        if(kin['tone_num'] == 12 )oracle['guide'] = kin['glyph_num'] + 12;
        if(kin['tone_num'] == 3)oracle['guide'] = kin['glyph_num'] + 4;
        if(kin['tone_num'] == 8)oracle['guide'] = kin['glyph_num'] + 4;
        if(kin['tone_num'] == 13)oracle['guide'] = kin['glyph_num'] + 4;        
        if(kin['tone_num'] == 4)oracle['guide'] = kin['glyph_num'] - 4;
        if(kin['tone_num'] == 9)oracle['guide'] = kin['glyph_num'] - 4;
        if(kin['tone_num'] == 5)oracle['guide'] = kin['glyph_num'] + 8;
        if(kin['tone_num'] == 7)oracle['guide'] = kin['glyph_num'] + 8;
        if(kin['tone_num'] == 10)oracle['guide'] = kin['glyph_num'] + 8;        
        if(oracle['guide'] < 20)oracle['guide'] += 20; ;
        if(oracle['guide'] > 20)oracle['guide'] -= 20; ;
        oracle['guide'] = oracle['guide'] % 20;        

        return oracle;

    }



    get_gregorian = function get_gregorian(days_from_doot) {
        
        gregorian = moment("07-25-2013").add('days',days_from_doot).format("G//YYYY.MM.DD");
        return gregorian;
        
    }

    function get_date(days_from_doot) {        

        moon = days_from_doot / 28;                         
        date['moon'] = Math.ceil(moon);           
        //date['moon_name'] = TONES[[date['moon_name']]['name']];
        date['num'] = days_from_doot % 28;                      
        date['day_of_week'] = date['num'] % 7;        
        if(date['day_of_week'] == 0) date['day_of_week'] = 7;                
        date['name'] = DAYS[[date['day_of_week']-1]][0];                
        date['img_path'] = IMG_PATH + 'plasma' + date['day_of_week'] + '.png';        
        date['moon_name'] = TONES[[date['moon'] - 1]][0];        
        date['gregorian'] = get_gregorian(days_from_doot);
        return date;

    }   

    function get_kin(days_from_doot) {        

        

        kin['num'] = parseInt(doot_kin) + parseInt(days_from_doot);                
        while(kin['num'] > 260) kin['num'] -= 260;

        kin['color'] = COLORS[kin['num'] % 4];        
        kin['img_path'] = IMG_PATH + 'Kin' + kin['num'] + '.png';        
        

        kin['tone_num'] = kin['num'] % 13;
        if(kin['tone_num'] == 0) kin['tone_num'] = 13;        
        kin['tone_name'] = TONES[[kin['tone_num'] - 1]][0];
        kin['tone_img_path'] = IMG_PATH + 'tone-' + kin['tone_num'] + '.png';
        
        kin['glyph_num'] = kin['num'] % 20;
        kin['glyph_name'] = GLYPHS[kin['glyph_num']][0];
        kin['glyph_img_path'] = IMG_PATH + 'seal' + kin['glyph_num'] + '.png';
        kin['portal'] = $.inArray(kin['num'], PORTALS);        


        return kin;
    }

    days_from_doot = get_days_from_doot(today);
    date = get_date(days_from_doot);
    kin = get_kin(days_from_doot);    
    oracle = get_oracle(kin);

    active_moon_string = '#' + date['moon_name'];  
    active_day_string = '';

    date['day_of_week'] = date['num'] % 7;     
    if(date['day_of_week'] == 0) date['day_of_week'] = 7;    

    if(date['num'] > 0 && date['num'] <= 7) {       
        active_day_string = active_moon_string + " table tr:first-child td:nth-child(" + date['day_of_week'] + ")";
    } else if(date['num'] > 7 && date['num'] <= 14) {
        active_day_string = active_moon_string + " table tr:nth-child(2) td:nth-child(" + date['day_of_week'] + ")";
    } else if(date['num'] > 14 && date['num'] <= 21) {
        active_day_string = active_moon_string + " table tr:nth-child(3) td:nth-child(" + date['day_of_week'] + ")";
    } else {
        active_day_string = active_moon_string + " table tr:last-child td:nth-child(" + date['day_of_week'] + ")";
    }
    
    //jQuery(active_moon_string).addClass('active');
    $(active_day_string.toLowerCase()).addClass('active');

    function get_output_strings() {
        
        date_string = date['moon_name'] + ' Moon, ' +  date['name'] + ' ' + date['num'];    
        kin_string = 'Kin ' + kin['num'] + ', ' + kin['color'] + ' ' + kin['tone_name'] + ' ' + kin['glyph_name'];        
        tone_string = TONES[kin['tone_num'] - 1][1] + ', ' + TONES[kin['tone_num'] - 1][2] + ', ' + TONES[kin['tone_num'] - 1][3];                
        glyph_string = GLYPHS[kin['glyph_num']][1] + ', ' + GLYPHS[kin['glyph_num']][2] + ', ' + GLYPHS[kin['glyph_num']][3];        
        if(date['day_of_week'] == 7) date['day_of_week'] = 6;        
        plasma_string = DAYS[date['day_of_week']][1] + ', ' + DAYS[date['day_of_week']][2] + ', ' + DAYS[date['day_of_week']][3];
        poem =  
            '<p>I ' + TONES[kin['tone_num'] - 1][1] + ' in order to ' + GLYPHS[kin['glyph_num']][2] + '</p>' +
            '<p>' +  TONES[kin['tone_num'] - 1][2] + ' ' + GLYPHS[kin['glyph_num']][3] + '</p>' +
            '<p>I seal the ' + GLYPHS[kin['glyph_num']][4] + ' of ' + GLYPHS[kin['glyph_num']][1] + '</p>' +
            '<p>With the ' + TONES[kin['tone_num'] - 1][0] + ' tone of ' + TONES[kin['tone_num'] - 1][3] + '</p>';        
        if(oracle['guide'] == kin['num']) poem += '<p>I am guided by my own Power doubled.';                        
        else poem += '<p>I am Guided by the Power of ' + GLYPHS[oracle['guide']][1];                
        if(kin['portal'] >= 0) poem += '<p>I am a Galactic Activation Portal, Enter Me';

    }

    display_year_kin = function display_year_kin(days_from_doot) {        

        
        $(".main img").show();
        $("#day-info img").attr('src',date['img_path']);        
        $("#day-info").append('<span>' + date_string + '</span>');        
        $("#kin-name img").attr('src',kin['img_path']);        
        $("#kin-name").append('<span>' + kin_string + '</span>');        
        $("#kin-info #tone img").attr('src',kin['tone_img_path']);
        $("#kin-info #tone").append('<span>' + tone_string + '</span>');
        $("#kin-info #glyph img").attr('src',kin['glyph_img_path']);
        $("#kin-info #glyph").append('<span>' + glyph_string + '</span>');
        $("#kin-info #plasma img").attr('src',date['img_path']);
        $("#kin-info #plasma").append('<span>' + plasma_string + '</span>');     
        $("#kin-info #gregorian").append('<span>' + date['gregorian'] + '</span>');     


    }

    display_year = function display_year(days_from_doot) {
        
        $("body").removeClass();
        $("body").addClass("kins");

        get_output_strings();
        
           
        $( "#magnetic, #lunar, #electric, #self-existing, #overtone, #rhythmic, #resonant, #galactic, #solar, #planetary, #spectral, #crystal, #cosmic").each(function( index ) {
            var moon_num;            
            var this_id = $(this).attr('id');            
            switch(this_id){
                case 'magnetic':
                    moon_num = 1;
                    break;
                case 'lunar':
                    moon_num = 2;
                    break;
                case 'electric':
                    moon_num = 3;                    
                    break;
                case 'self-existing':
                    moon_num = 4;
                    break;
                case 'overtone':
                    moon_num = 5;
                    break;
                case 'rhythmic':
                    moon_num = 6;
                    break;
                case 'resonant':
                    moon_num = 7;
                    break;
                case 'galactic':
                    moon_num = 8;
                    break;
                case 'solar':
                    moon_num = 9;
                    break;
                case 'planetary':
                    moon_num = 10;
                    break;
                case 'spectral':
                    moon_num = 11;
                    break;
                case 'crystal':
                    moon_num = 12;
                    break;
                default:
                    moon_num = 13
            }
            moon_num--;    
            days_from_doot = moon_num * 28 + 1;        
            var start_kin = doot_kin + (moon_num * 28);            
            start_kin++;
            while(start_kin > 260) start_kin -= 260;            
            
            var td_class = '#' + this_id + ' td img';
            $(td_class).each(function(){
                if(start_kin > 260) start_kin = 1;
                var glyph_img_path = IMG_PATH + 'Kin' + start_kin + '.png'
                $(this).attr('src',glyph_img_path);                
                start_kin++;                                      
                $(this).parent().attr("days-from-doot", days_from_doot);                
                days_from_doot++;                
            })
            
        });   
        
        display_year_kin(days_from_doot);

    
    }        

    display_year_glyph = function display_year_glyph() {
        $("body").removeClass();
        $("body").addClass("glyphs");
        $(".moon td img").each(function(){
            if(start_glyph > 111) start_glyph = 65;
            var glyph_img_path = IMG_PATH + 'runes/rune-' + start_glyph + '.png'
            $(this).attr('src',glyph_img_path);                
            start_glyph++;                                       
        });        
    }

    display_daily_kin = function display_daily_kin() {        
        get_output_strings();
        $("h2").append('<span>' + date_string + '</span>');
        $("h1").append('<span>' + kin_string + '</span>');   
        $("img").attr('src',kin['img_path']);        
        $(".codespell").append(poem);
    }    

    reset_kin = function reset_kin() {

        $("img").attr('src','#'); 
        $(".main span").remove();
        $(".main img").hide();        
        $('a').removeClass('active');
    }


    $('a#reset').click(function() {        
       reset_kin();       
    });

    $('a#display-kin').click(function(){                        
        reset_kin();       
        display_year();
    })

    $('a#display-glyphs').click(function(){        
        start_glyph = 65;                
        reset_kin();               
        display_year_glyph();        
    })    

    $('.kins td td a').click(function(){        
        reset_kin();        
        days_from_doot = $(this).attr('days-from-doot');        
        gregorian = get_gregorian(days_from_doot);        
        date = get_date(days_from_doot);        
        kin = get_kin(days_from_doot);         
        display_year(days_from_doot);
        $('a').removeClass('active');
        $(this).addClass('active');        
        return false;        
    });


});






