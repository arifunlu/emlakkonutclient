var data = {
    ada: [],
    parsel: [],
    kullanis: [],
    yon: [],
    kat: [],
    oda: [],
    blok: []
};

function hideToolTipInRedBox(){
    $('.imp-shape-rect').unbind()
    $('.imp-shape-rect').hover(function(){
        if($(this).css("backgroundColor") + "" === "rgb(255, 0, 0)"){
            $('.imp-tooltip[data-index="'+ $(this).data("index") +'"]').addClass("HideToolTipInRed");
        }
    }, function(){
        setTimeout(function(){
            $('.imp-tooltip[data-index="'+ $(this).data("index") +'"]').removeClass("HideToolTipInRed");
        }, 500);
    });
}

function onChangeFilters(e) {
    debugger;
    var param = e.id;

    if (param.indexOf("ada") > -1) {
        if (e.checked) {
            data.ada.push(e.value);
        } else {
            data.ada.splice(data.ada.indexOf(e.value), 1);
        }
    } else if (param.indexOf("parsel") > -1) {
        if (e.checked) {
            data.parsel.push(e.value);
        } else {
            data.parsel.splice(data.parsel.indexOf(e.value), 1);
        }
    } else if (param.indexOf("kullanis") > -1) {
        if (e.checked) {
            data.kullanis.push(e.value);
        } else {
            data.kullanis.splice(data.kullanis.indexOf(e.value), 1);
        }
    } else if (param.indexOf("yon") > -1) {
        if (e.checked) {
            data.yon.push(e.value);
        } else {
            data.yon.splice(data.yon.indexOf(e.value), 1);
        }
    } else if (param.indexOf("kat") > -1) {
        if (e.checked) {
            data.kat.push(e.value);
        } else {
            data.kat.splice(data.kat.indexOf(e.value), 1);
        }
    } else if (param.indexOf("oda") > -1) {
        if (e.checked) {
            data.oda.push(e.value);
        } else {
            data.oda.splice(data.oda.indexOf(e.value), 1);
        }
    } else if (param.indexOf("block") > -1) {
        if (e.checked) {
            data.blok.push(e.value);
        } else {
            data.blok.splice(data.blok.indexOf(e.value), 1);
        }
    }

    $.ajax({
        type: "POST",
        url: filterBarUrl,
        data: data,
        success: function (responseData) {
            $('#apartmentList').html(responseData.html);

            activeBlocksArr = [];
            for (var i in responseData.activeBlocks) {
                activeBlocksArr.push(responseData.activeBlocks[i]);
            }

            var blocks = objectJson.spots;
            for (var j in blocks) {
                if ($.inArray(blocks[j].title, activeBlocksArr) >= 0) {
                    blocks[j].default_style.background_color = "#208837";
                }
                else{
                    blocks[j].default_style.background_color = "#ff0000";
                }
            }

            $('#image-map-pro-container').imageMapPro(objectJson);
            hideToolTipInRedBox();
        }
    });
}

function onClickTextFilters(s) {
    debugger
    if (s === "fiyat") {
        data.priceMin = document.getElementById("priceMin").value;
        data.priceMax = document.getElementById("priceMax").value;
    } else if (s === "kapi") {
        data.kapiNo = document.getElementById("kapiNo").value;
    } else if (s === "brutM2") {
        data.brutM2Min = document.getElementById("brutM2Min").value;
        data.brutM2Max = document.getElementById("brutM2Max").value;
    } else if(s === "NetM2") {
        data.netM2Min = document.getElementById("netM2Min").value;
        data.netM2Max = document.getElementById("netM2Max").value;
    } else if (s === "sozlesme") {
        data.sozlesme = document.getElementById("sozlesme").value;
    }

    $.ajax({
        type: "POST",
        url: filterBarUrl,
        data: data,
        success: function (responseData) {
            $('#apartmentList').html(responseData.html);
            
            activeBlocksArr = [];
            for (var i in responseData.activeBlocks) {
                activeBlocksArr.push(responseData.activeBlocks[i]);
            }

            var blocks = objectJson.spots;
            for (var j in blocks) {
                if ($.inArray(blocks[j].title, activeBlocksArr) >= 0) {
                    blocks[j].default_style.background_color = "#208837";
                }
                else{
                    blocks[j].default_style.background_color = "#ff0000";
                }
            }

            $('#image-map-pro-container').imageMapPro(objectJson);
            hideToolTipInRedBox();
        }
    });
}