function cekform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["phone"].value;
        var d = document.forms["my-form"]["id-line"].value;
        var e = document.forms["my-form"]["pilih-paket"].value;

        if (a==null || a=="")
        {
            alert("Silakan isi nama lengkap anda");
            return false;
        }else if (b==null || b=="")
        {
            alert("Silakan isi email anda");
            return false;
        }else if (c==null || c=="")
        {
            alert("Silakan isi nomor ponsel anda");
            return false;
        }else if (d==null || d=="")
        {
            alert("Silakan isi ID LINE anda");
            return false;
        }else if (e==null || e=="")
        {
            alert("");
            return false;
        }

    }