function initCommutation(){$.post("core.php", {"action":"initCommutation"}, showCommutationAdmin);}
function initDrums(){$.post("core.php", {"action":"initDrums"}, showDrumsAdmin);}
function initGuitars(){$.post("core.php", {"action":"initGuitars"}, showGuitarsAdmin);}
function initHeadphones(){$.post("core.php", {"action":"initHeadphones"}, showHeadphonesAdmin);}
function initMicrophone(){$.post("core.php", {"action":"initMicrophone"}, showMicrophoneAdmin);}
function initNewProdIndex(){$.post("core.php", {"action":"initNewProdIndex"}, showNewProdAdmin);}
function initPiano(){$.post("core.php", {"action":"initPiano"}, showPianoAdmin);}
function initSoundEquip(){$.post("core.php", {"action":"initSoundEquip"}, showSoundEquipAdmin);}


//коммутация//
function showCommutationAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__1').html(out);
    $('.select-categor__1 select').on('change', selectComutation);
}

function selectComutation() {
    var id = $('.select-categor__1 select option:selected').attr('data-id');
    $.post(
        "core.php",
        {
            "action" : "SelectOneCommutation",
            "gid" : id
        },
        function (data) {
            data = JSON.parse(data);
            $('#gname').val(data.name);
            $('#garticul').val(data.articul);
            $('#gtradeMark').val(data.tradeMark);
            $('#gseria3').val(data.seria3);
            $('#gcost').val(data.cost);
            $('#gnalichie').val(data.nalichie);
            $('#gmainPhoto1').val(data.mainPhoto1);
            $('#gmainPhoto2').val(data.mainPhoto2);
            $('#gpopupPhoto1').val(data.popupPhoto1);
            $('#gpopupPhoto2').val(data.popupPhoto2);
            $('#gcharacter1Key').val(data.character1Key);
            $('#gcharacter1Info').val(data.character1Info);
            $('#gcharacter2Key').val(data.character2Key);
            $('#gcharacter2Info').val(data.character1Info);
            $('#gcharacter3Key').val(data.character3Key);
            $('#gcharacter3Info').val(data.character3Info);
            $('#gcharacter4Key').val(data.character4Key);
            $('#gcharacter4Info').val(data.character4Info);
            $('#gbrendPhoto').val(data.brendPhoto);
            $('#gaboutBrend').val(data.aboutBrend);
            $('#gbrendTitle1').val(data.brendTitle1);
            $('#gbrendText1').val(data.brendText1);
            $('#gbrendText2').val(data.brendText2);
            $('#gbrendTitle2').val(data.brendTitle2);
            $('#gbrendText3').val(data.brendText3);
            $('#gbrendText4').val(data.brendText4);
            $('#gshortdescr').val(data.shortdescr);
            $('#gid').val(data.id);
        }
    )
}

function saveToDBCommutation() {
    var id = $('#gid').val();
    if (id!=""){
        $.post(
            "core.php",
            {
                "action" : "updateCommutation",
                "id" : id,
                "gname":  $('#gname').val(),
                "garticul":  $('#garticul').val(),
                "gtradeMark":  $('#gtradeMark').val(),
                "gseria3":  $('#gseria3').val(),
                "gcost":  $('#gcost').val(),
                "gnalichie":  $('#gnalichie').val(),
                "gmainPhoto1":  $('#gmainPhoto1').val(),
                "gmainPhoto2":  $('#gmainPhoto2').val(),
                "gpopupPhoto1":  $('#gpopupPhoto1').val(),
                "gpopupPhoto2":  $('#gpopupPhoto2').val(),
                "gcharacter1Key":  $('#gcharacter1Key').val(),
                "gcharacter1Info":  $('#gcharacter1Info').val(),
                "gcharacter2Key":  $('#gcharacter2Key').val(),
                "gcharacter2Info":  $('#gcharacter2Info').val(),
                "gcharacter3Key":  $('#gcharacter3Key').val(),
                "gcharacter3Info":  $('#gcharacter3Info').val(),
                "gcharacter4Key":  $('#gcharacter4Key').val(),
                "gcharacter4Info":  $('#gcharacter4Info').val(),
                "gbrendPhoto":  $('#gbrendPhoto').val(),
                "gaboutBrend":  $('#gaboutBrend').val(),
                "gbrendTitle1":  $('#gbrendTitle1').val(),
                "gbrendText1":  $('#gbrendText1').val(),
                "gbrendText2":  $('#gbrendText2').val(),
                "gbrendTitle2":  $('#gbrendTitle2').val(),
                "gbrendText3":  $('#gbrendText3').val(),
                "gbrendText4":  $('#gbrendText4').val(),
                "gshortdescr":  $('#gshortdescr').val()
            },
            function (data) {
                if (data==1){
                    alert('запись обновлена');
                    initCommutation();
                    location="admin.php";
                    document.location.href="admin.php";
                    location.replace("admin.php");
                    window.location.reload("admin.php");
                    document.location.replace("admin.php");
                }
                else {
                    console.log(data);
                }
            }
        );
    }
    else {
        $.post(
            "core.php",
            {
                "action" : "newCommutation",
                "id" : 0,
                "gname":  $('#gname').val(),
                "garticul":  $('#garticul').val(),
                "gtradeMark":  $('#gtradeMark').val(),
                "gseria3":  $('#gseria3').val(),
                "gcost":  $('#gcost').val(),
                "gnalichie":  $('#gnalichie').val(),
                "gmainPhoto1":  $('#gmainPhoto1').val(),
                "gmainPhoto2":  $('#gmainPhoto2').val(),
                "gpopupPhoto1":  $('#gpopupPhoto1').val(),
                "gpopupPhoto2":  $('#gpopupPhoto2').val(),
                "gcharacter1Key":  $('#gcharacter1Key').val(),
                "gcharacter1Info":  $('#gcharacter1Info').val(),
                "gcharacter2Key":  $('#gcharacter2Key').val(),
                "gcharacter2Info":  $('#gcharacter2Info').val(),
                "gcharacter3Key":  $('#gcharacter3Key').val(),
                "gcharacter3Info":  $('#gcharacter3Info').val(),
                "gcharacter4Key":  $('#gcharacter4Key').val(),
                "gcharacter4Info":  $('#gcharacter4Info').val(),
                "gbrendPhoto":  $('#gbrendPhoto').val(),
                "gaboutBrend":  $('#gaboutBrend').val(),
                "gbrendTitle1":  $('#gbrendTitle1').val(),
                "gbrendText1":  $('#gbrendText1').val(),
                "gbrendText2":  $('#gbrendText2').val(),
                "gbrendTitle2":  $('#gbrendTitle2').val(),
                "gbrendText3":  $('#gbrendText3').val(),
                "gbrendText4":  $('#gbrendText4').val(),
                "gshortdescr":  $('#gshortdescr').val()
            },
            function (data) {
                if (data==1){
                    alert('новая запись добавлена');
                    initCommutation();
                    location="admin.php";
                    document.location.href="admin.php";
                    location.replace("admin.php");
                    window.location.reload("admin.php");
                    document.location.replace("admin.php");
                }
                else {
                    console.log(data);
                }
            }
        );
    }
}

//ударные//
function showDrumsAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__2').html(out);
    $('.select-categor__2 select').on('change', selectDrums);
}

function selectDrums() {
    var id = $('.select-categor__2 select option:selected').attr('data-id');
    $.post(
        "core.php",
        {
            "action" : "SelectOneDrums",
            "gid" : id
        },
        function (data) {
            data = JSON.parse(data);
            $('#gname2').val(data.name);
            $('#garticul2').val(data.articul);
            $('#gtradeMark2').val(data.tradeMark);
            $('#gseria32').val(data.seria3);
            $('#gcost2').val(data.cost);
            $('#gnalichie2').val(data.nalichie);
            $('#gmainPhoto12').val(data.mainPhoto1);
            $('#gmainPhoto22').val(data.mainPhoto2);
            $('#gpopupPhoto12').val(data.popupPhoto1);
            $('#gpopupPhoto22').val(data.popupPhoto2);
            $('#gcharacter1Key2').val(data.character1Key);
            $('#gcharacter1Info2').val(data.character1Info);
            $('#gcharacter2Key2').val(data.character2Key);
            $('#gcharacter2Info2').val(data.character1Info);
            $('#gcharacter3Key2').val(data.character3Key);
            $('#gcharacter3Info2').val(data.character3Info);
            $('#gcharacter4Key2').val(data.character4Key);
            $('#gcharacter4Info2').val(data.character4Info);
            $('#gbrendPhoto2').val(data.brendPhoto);
            $('#gaboutBrend2').val(data.aboutBrend);
            $('#gbrendTitle12').val(data.brendTitle1);
            $('#gbrendText12').val(data.brendText1);
            $('#gbrendText22').val(data.brendText2);
            $('#gbrendTitle22').val(data.brendTitle2);
            $('#gbrendText32').val(data.brendText3);
            $('#gbrendText42').val(data.brendText4);
            $('#gshortdescr2').val(data.shortdescr);
            $('#gid2').val(data.id);
        }
    )
}

function saveToDBDrums() {
    var id = $('#gid2').val();
    if (id!=""){
        $.post(
            "core.php",
            {
                "action" : "updateDrums",
                "id" : id,
                "gname":  $('#gname2').val(),
                "garticul":  $('#garticul2').val(),
                "gtradeMark":  $('#gtradeMark2').val(),
                "gseria3":  $('#gseria32').val(),
                "gcost":  $('#gcost2').val(),
                "gnalichie":  $('#gnalichie2').val(),
                "gmainPhoto1":  $('#gmainPhoto12').val(),
                "gmainPhoto2":  $('#gmainPhoto22').val(),
                "gpopupPhoto1":  $('#gpopupPhoto12').val(),
                "gpopupPhoto2":  $('#gpopupPhoto22').val(),
                "gcharacter1Key":  $('#gcharacter1Key2').val(),
                "gcharacter1Info":  $('#gcharacter1Info2').val(),
                "gcharacter2Key":  $('#gcharacter2Key2').val(),
                "gcharacter2Info":  $('#gcharacter2Info2').val(),
                "gcharacter3Key":  $('#gcharacter3Key2').val(),
                "gcharacter3Info":  $('#gcharacter3Info2').val(),
                "gcharacter4Key":  $('#gcharacter4Key2').val(),
                "gcharacter4Info":  $('#gcharacter4Info2').val(),
                "gbrendPhoto":  $('#gbrendPhoto2').val(),
                "gaboutBrend":  $('#gaboutBrend2').val(),
                "gbrendTitle1":  $('#gbrendTitle12').val(),
                "gbrendText1":  $('#gbrendText12').val(),
                "gbrendText2":  $('#gbrendText22').val(),
                "gbrendTitle2":  $('#gbrendTitle22').val(),
                "gbrendText3":  $('#gbrendText32').val(),
                "gbrendText4":  $('#gbrendText42').val(),
                "gshortdescr":  $('#gshortdescr2').val()
            },
            function (data) {
                if (data==1){
                    alert('запись обновлена');
                    initDrums();
                    location="admin.php";
                    document.location.href="admin.php";
                    location.replace("admin.php");
                    window.location.reload("admin.php");
                    document.location.replace("admin.php");
                }
                else {
                    console.log(data);
                }
            }
        );
    }
    else {
        $.post(
            "core.php",
            {
                "action" : "newDrums",
                "id" : 0,
                "gname":  $('#gname2').val(),
                "garticul":  $('#garticul2').val(),
                "gtradeMark":  $('#gtradeMark2').val(),
                "gseria3":  $('#gseria32').val(),
                "gcost":  $('#gcost2').val(),
                "gnalichie":  $('#gnalichie2').val(),
                "gmainPhoto1":  $('#gmainPhoto12').val(),
                "gmainPhoto2":  $('#gmainPhoto22').val(),
                "gpopupPhoto1":  $('#gpopupPhoto12').val(),
                "gpopupPhoto2":  $('#gpopupPhoto22').val(),
                "gcharacter1Key":  $('#gcharacter1Key2').val(),
                "gcharacter1Info":  $('#gcharacter1Info2').val(),
                "gcharacter2Key":  $('#gcharacter2Key2').val(),
                "gcharacter2Info":  $('#gcharacter2Info2').val(),
                "gcharacter3Key":  $('#gcharacter3Key2').val(),
                "gcharacter3Info":  $('#gcharacter3Info2').val(),
                "gcharacter4Key":  $('#gcharacter4Key2').val(),
                "gcharacter4Info":  $('#gcharacter4Info2').val(),
                "gbrendPhoto":  $('#gbrendPhoto2').val(),
                "gaboutBrend":  $('#gaboutBrend2').val(),
                "gbrendTitle1":  $('#gbrendTitle12').val(),
                "gbrendText1":  $('#gbrendText12').val(),
                "gbrendText2":  $('#gbrendText22').val(),
                "gbrendTitle2":  $('#gbrendTitle22').val(),
                "gbrendText3":  $('#gbrendText32').val(),
                "gbrendText4":  $('#gbrendText42').val(),
                "gshortdescr":  $('#gshortdescr2').val()
            },
            function (data) {
                if (data==1){
                    alert('новая запись добавлена');
                    initDrums();
                    location="admin.php";
                    document.location.href="admin.php";
                    location.replace("admin.php");
                    window.location.reload("admin.php");
                    document.location.replace("admin.php");
                }
                else {
                    console.log(data);
                }
            }
        );
    }
}

//гитары

function showGuitarsAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__3').html(out);
}

function showHeadphonesAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__4').html(out);
}

function showMicrophoneAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__5').html(out);
}

function showNewProdAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__6').html(out);
}

function showPianoAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__7').html(out);
}

function showSoundEquipAdmin(data){
    data = JSON.parse(data);
    var  out='<select>';
    out +='<option data-id="0">Новый Товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.select-categor__8').html(out);
}

$(document).ready(function () {
    initCommutation();
    initDrums();
    initGuitars();
    initHeadphones();
    initMicrophone();
    initNewProdIndex();
    initPiano();
    initSoundEquip();

    $('.add-to-db1').on('click', saveToDBCommutation);
    $('.add-to-db2').on('click', saveToDBDrums);
    /*$('.add-to-db3').on('click', saveToDB);
    $('.add-to-db4').on('click', saveToDB);
    $('.add-to-db5').on('click', saveToDB);
    $('.add-to-db6').on('click', saveToDB);
    $('.add-to-db7').on('click', saveToDB);
    $('.add-to-db8').on('click', saveToDB);*/

    $('.categories__item').click(function () {
        var tabName = $(this).attr('show-tab');
        $(this).addClass('active').siblings().removeClass('active');
        $('.content-admin__cart .' + tabName).addClass('active').siblings().removeClass('active');
    });
});