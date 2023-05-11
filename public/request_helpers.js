/**
 * Returns the form validity
 */
function rhSubmitForm(formId, url, callback, errorCallback = false, validate = true) {
    var formData = requestHelperConvertFormToJSON(formId);

    if(validate) {
        var formIsValid = requestHelperCheckIsFormValid(formId);
        if (!formIsValid) {
            return false;
        }
    }

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function (data) {
            rhHandleSuccess(data, callback);
        },
        error: function (errorObject) {
            rhHandleError(errorObject.responseText, errorCallback);
        },
    });
    return true;
}

function rhPostRequest(data, url, callback, errorCallback = false) {
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success: function (data) {
            rhHandleSuccess(data, callback, errorCallback);
        },
        error: function (errorObject) {
            rhHandleError(errorObject.responseText, errorCallback);
        },
    });
}

function rhGetRequest(url, callback, errorCallback = false) {
    $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            rhHandleSuccess(data, callback);
        },
        error: function (errorObject) {
            rhHandleError(errorObject.responseText, errorCallback);
        },
    });
}

///////////// INTERNAL FUNCTIONS /////////////

function rhHandleSuccess(data, successCallback, errorCallback) {




    if (data.success === true) {
        return successCallback(data);
    }else if(data.success === false) {

        if(errorCallback) {
            errorCallback(data);
        } else {
            requestHelperDefaultErrorHandler(data);
        }
    }else{
        alert('Received an unexpected response, please reach out to the development team.');
    }

}


function rhHandleError(error, callback) {
    var data = {
        success: false,
        message: error,
    };
    if(typeof callback === 'function') {
        callback(data);
    }else{
        requestHelperDefaultErrorHandler(data);
    }
}

/**
 * Check if a form is valid.
 *
 * @param {*} formId
 * @param {*} updateUiWithResults
 * @returns
 */
function requestHelperCheckIsFormValid(formId, updateUiWithResults = true) {
    var form = $('#' + formId);
    var formIsValid = form
        .get(0)
        .checkValidity();
    if (updateUiWithResults) {
        form.get(0).reportValidity();
    }
    return formIsValid;
}

function requestHelperConvertFormToJSON(formId) {
    return $('#' + formId)
        .serializeArray()
        .reduce(function (json, {
            name,
            value
        }) {
            json[name] = value;
            return json;
        }, {});
}

function requestHelperDefaultErrorHandler(data) {
    var message = "";

    if(data.message) {
        message = data.message;
    }   else{
        message = data;
    }
    console.log(message);

    if(typeof rhErrorDisplayFunction === 'undefined') {
        rhErrorDisplayFunction = function(message) {
            "An error occurred: \n" + message;
            alert(message);

             document.getElementById('PageSpinner').style.display = 'none';
            document.getElementById('PageFade').style.display = 'none';
        }
    }

    rhErrorDisplayFunction(message);



}
