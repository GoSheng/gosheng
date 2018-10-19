$(document).ready(function () {
    let form = document.querySelector('#userForm');
    let submit = form.querySelector('input[type=submit]');
    submit.addEventListener('click', function (e) {
        e.preventDefault();
    });
    if (form) {
        let inputAll = form.querySelectorAll('input');
        let selectAll = form.querySelectorAll('select');
        for (let inputLength = inputAll.length, i = 0; i < inputLength; i++) {
            inputAll[i].addEventListener('change', inputChanged);
        }

        for (let selectLength = selectAll.length, i = 0; i < selectLength; i++) {
            selectAll[i].addEventListener('change', inputChanged);
        }
    }

    function inputChanged(e) {
        let input = e.target;
        let inputName = input.attributes['name'].value;
        let inputValue = input.value;
        let pText = document.querySelector('#pText');

        let inputSafe = form.querySelector('input[type=hidden]');
        let inputSafeName = inputSafe ? inputSafe.name : '';
        let inputSafeValue = inputSafe ? inputSafe.value : '';
        let formMethod = submit ? submit.attributes['formmethod'].value : '';
        let formAction = submit ? submit.attributes['formaction'].value : '';
        // inputSafe ? inputSafeName = inputSafe.name : '';
        // inputSafe ? inputSafeValue = inputSafe.value : '';
        // submit ? formMethod = submit.attributes['formmethod'].value : '';
        // submit ? formAction = submit.attributes['formaction'].value : '';

        let submitS = {
            [inputName]: inputValue,
            [inputSafeName]: inputSafeValue
        };
        let submitInput = {"GoShengAJAX": submitS};

        $.ajax({
            type: formMethod || 'post',
            url: formAction,
            dataType: 'json',
            data: submitInput,
            cache: false,
            success: ajaxSuccess,
            error: ajaxError
        });

        function ajaxSuccess(e) {
            pText.innerHTML = e.GoShengAJAX[inputName];//为返回值的数据
        }

        function ajaxError(msg) {
            console.log('出错1');
            console.log(msg);
            console.log('responseText:' + msg.responseText);
            console.log('readyState:' + msg.readyState);
            console.log('status:' + msg.status);
            console.log('statusText:' + msg.statusText);
            console.log('出错2');
            pText.innerHTML = msg.responseText;//为返回值的数据
        }
    }

});
