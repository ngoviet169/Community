function close_msg() {
    if (document.getElementById("msg_box_bg").style.display == "") {
        document.getElementById("msg_box_bg").style.display = "none";
    }
}
function goto_page(page) {
    document.F1.page.value = page;
    document.F1.submit();
}
function go_submit() {
    document.F1.submit();
}
function go_back() {
    document.F1.mode.value = "back";
    document.F1.submit();
}
function goto_syousai(msgid, page) {
    document.F1.action = "keijiban_syousai.html";
    document.F1.msg.value = msgid;
    document.F1.page.value = page;
    document.F1.submit();
}
function goto_new_page(msgid, page, next) {
    document.F1.action = "keijiban_syousai.html";
    document.F1.msg.value = msgid;
    document.F1.page.value = page;
    document.F1.list_no.value = next;
    document.F1.submit();
}
function goto_new_page2(msgid, page, new_page) {
    document.F1.action = "keijiban_syousai.html";
    document.F1.new_page.value = new_page;
    document.F1.submit();
}
function goto_ichiran(url) {
    document.F1.action = url;
    document.F1.submit();
}
function goto_tettei(area) {
    document.F1.action = "kensaku_details.html";
    document.F1.area.value = area;
    document.F1.submit();
}
function selLink() {
    document.f_entry.mode.value = "update_sex";
    document.f_entry.submit();
}
function selLink_2() {
    document.F1.mode.value = "update_sex";
    document.F1.submit();
}
function selLink_3() {
    document.F1.target = "kensaku_login_top";
    document.F1.action = "kensaku_login_top.html";
    document.F1.mode.value = "update_sex";
    document.F1.submit();
}
function chg_area1() {
    document.f_entry.mode.value = "update_area1";
    document.f_entry.submit();
}
function chg_area1_2() {
    document.F1.mode.value = "update_area1";
    document.F1.submit();
}
function chg_area1_3() {
    document.F1.target = "kensaku_login_top";
    document.F1.action = "kensaku_login_top.html";
    document.F1.mode.value = "update_area1";
    document.F1.submit();
}
function chg_area1_4() {
    document.f_post.mode.value = "update_area1";
    document.f_post.submit();
}
function MM_preloadImages() { //v3.0
    var d = document;
    if (d.images) {
        if (!d.MM_p) d.MM_p = new Array();
        var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
        for (i = 0; i < a.length; i++)
            if (a[i].indexOf("#") != 0) {
                d.MM_p[j] = new Image;
                d.MM_p[j++].src = a[i];
            }
    }
}

function MM_findObj(n, d) { //v4.01
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
    if (!x && d.getElementById) x = d.getElementById(n);
    return x;
}

function MM_nbGroup(event, grpName) { //v6.0
    var i, img, nbArr, args = MM_nbGroup.arguments;
    if (event == "init" && args.length > 2) {
        if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
            img.MM_init = true;
            img.MM_up = args[3];
            img.MM_dn = img.src;
            if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
            nbArr[nbArr.length] = img;
            for (i = 4; i < args.length - 1; i += 2) if ((img = MM_findObj(args[i])) != null) {
                if (!img.MM_up) img.MM_up = img.src;
                img.src = img.MM_dn = args[i + 1];
                nbArr[nbArr.length] = img;
            }
        }
    } else if (event == "over") {
        document.MM_nbOver = nbArr = new Array();
        for (i = 1; i < args.length - 1; i += 3) if ((img = MM_findObj(args[i])) != null) {
            if (!img.MM_up) img.MM_up = img.src;
            img.src = (img.MM_dn && args[i + 2]) ? args[i + 2] : ((args[i + 1]) ? args[i + 1] : img.MM_up);
            nbArr[nbArr.length] = img;
        }
    } else if (event == "out") {
        for (i = 0; i < document.MM_nbOver.length; i++) {
            img = document.MM_nbOver[i];
            img.src = (img.MM_dn) ? img.MM_dn : img.MM_up;
        }
    } else if (event == "down") {
        nbArr = document[grpName];
        if (nbArr)
            for (i = 0; i < nbArr.length; i++) {
                img = nbArr[i];
                img.src = img.MM_up;
                img.MM_dn = 0;
            }
        document[grpName] = nbArr = new Array();
        for (i = 2; i < args.length - 1; i += 2) if ((img = MM_findObj(args[i])) != null) {
            if (!img.MM_up) img.MM_up = img.src;
            img.src = img.MM_dn = (args[i + 1]) ? args[i + 1] : img.MM_up;
            nbArr[nbArr.length] = img;
        }
    }
}

function win(url, name, wHeight, wWidth) {
    sWidth = screen.availWidth;
    sHeight = screen.availHeight;
    x = (sWidth - wWidth) / 2;
    y = (sHeight - wHeight) / 2;
    newWin = window.open(url, name, "width=" + wWidth + ",height=" + wHeight);
//newWin.moveTo(x,y);
}
function win2(wHeight, wWidth) {
    sWidth = screen.availWidth;
    sHeight = screen.availHeight;
    x = (sWidth - wWidth) / 2;
    y = (sHeight - wHeight) / 2;
    newWin = window.open('e_pop.html', 'win_epop', "width=" + wWidth + ",height=" + wHeight);
//newWin.moveTo(x,y);
}
function win3(wHeight, wWidth) {
    sWidth = screen.availWidth;
    sHeight = screen.availHeight;
    newWin = window.open('r_pop.html', 'r_pop', "width=" + wWidth + ",height=" + wHeight);
//newWin.moveTo(0,0);
}

function win_scroll(url, name, wHeight, wWidth) {
    newWin = window.open(url, name, "width=" + wWidth + ",height=" + wHeight + ", scrollbars=yes");
}

function MM_goToURL() { //v3.0
    var i, args = MM_goToURL.arguments;
    document.MM_returnValue = false;
    for (i = 0; i < (args.length - 1); i += 2) eval(args[i] + ".location='" + args[i + 1] + "'");
}
function set_descrip() {
    var x = navigator.appVersion;
    y = x.substring(0, 4);
    if (y >= 4) set_value();
}
var x, y, a, b;
function set_value() {
    if (navigator.appName == "Netscape") {
        h = ".left=";
        v = ".top=";
        dS = "document.";
        sD = "";
    }
    else {
        h = ".pixelLeft=";
        v = ".pixelTop=";
        dS = "";
        sD = ".style";
    }
}

// 画像の事前読み込み
var bgimg = new Array()
bgimg[0] = new Image();
bgimg[0].src = 'img/enter_qr.gif'
bgimg[1] = new Image();
bgimg[1].src = 'img/enter_qr2.gif'

//(注1)

//--背景画像set
function setBGIMG(layName, image) {
    if (document.getElementById)         //e5,e6,n6,n7,m1,o6,o7,s1用
        document.getElementById(layName).style.backgroundImage
            = (image == '') ? '' : 'url(' + image + ')'
    else if (document.all)               //e4用
        document.all(layName).style.backgroundImage = 'url(' + image + ')'
    else if (document.layers)            //n4用
        document.layers[layName].background.src = (image == '') ? null : image
}
//-->

function upload_id(mail_cookie, login_pass) {
    dt = new Date();
    dt.setTime(dt.getTime() + 30 * 24 * 60 * 60);
    exday = dt.toGMTString();
    document.cookie = 'M_save_login_id' + "=" + mail_cookie + ";expires=" + exday;
    document.cookie = 'M_save_login_pass' + "=" + login_pass + ";expires=" + exday;
    document.cookie = 'M_save_flg' + "=" + "1" + ";expires=" + exday;

    var tmp = document.cookie + ";";
    var index1 = tmp.indexOf('M_save_login_id', 0);
    if (index1 != -1) {
        tmp = tmp.substring(index1, tmp.length);
        var index2 = tmp.indexOf("=", 0) + 1;
        var index3 = tmp.indexOf(";", index2);
        if (unescape(tmp.substring(index2, index3)) == mail_cookie) {
            alert('パソコンにメールアドレス、パスワードを保存しました。');
        } else {
            alert('保存できませんでした。インターネットオプションの設定を確認して下さい。');
        }
    } else {
        alert('保存できませんでした。インターネットオプションの設定を確認して下さい。');
    }
}
function goto_sort(sort) {
    document.F1.action = "";
    document.F1.sort.value = sort;
    document.F1.page.value = 0;
    document.F1.submit();
}

//同意確認
function checkDouiItems() {
    oElements = document.getElementsByName("doui");
    for (i = 0; i < oElements.length; i++) {
        if (oElements[i].checked) {
            return true;
        }
    }
    return false;
}

//リンク表示
function go_link(link_url) {
    window.open(link_url);
}
