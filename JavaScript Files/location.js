
        if ('geolocation' in navigator) {
            console.log('Geolocation Available');
            navigator.geolocation.getCurrentPosition(function (position) {
                console.log(position.coords.latitude);
                console.log(position.coords.longitude);
            });
        } else {
            console.log('Geolocation Not Available');
        }