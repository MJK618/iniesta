


    var today = new Date();
        var date = +today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
        document.getElementById('date').innerHTML = date;
    
        setInterval(showTime, 1000);
        function showTime() {
        let time = new Date();
        let hour = time.getHours();
        let min = time.getMinutes();
        let sec = time.getSeconds();
        am_pm = "AM";
    
        if (hour > 12) {
            hour -= 12;
            am_pm = "PM";
        }
        if (hour == 0) {
            hr = 12;
            am_pm = "AM";
        }
    
        hour = hour < 10 ? "0" + hour : hour;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;
    
        let currentTime = hour + ":"
                + min + ":" + sec +" " +  am_pm;
    
        document.getElementById("time")
                .innerHTML = currentTime;
        }
        showTime();

        
            const toggle = document.getElementById('clicked_btn');
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main');
            const width=document.getElementById('width');
            
    
            function clicked() {
                if (sidebar.style.display == 'none') {
                    sidebar.style.display = 'block';
                    main.style.display = 'none';
                    sidebar.style.width='280%';
                    width.style.width='60%';
                   
                }
                else {
                    sidebar.style.display = "none";
                    main.style.display = 'block';
                    sidebar.style.width='70%';
                    width.style.width='90%';
                }
            }
