function radioSwitch(btn) {
    var btnParent = btn.parentElement;
    var yesBtn = btnParent.children[0];
    var yesLabel = btnParent.children[1];
    var noBtn = btnParent.children[2];
    var noLabel = btnParent.children[3];

    if (btn == yesBtn) {
        if (!btn.hasAttribute('checked')) {
            yesBtn.setAttribute('checked', true);
            yesLabel.classList.add('btn-success');
            yesLabel.classList.remove('btn-secondary');

            noBtn.removeAttribute('checked');
            noLabel.classList.remove('btn-success');
            noLabel.classList.add('btn-secondary');
        }
    } else {
        if (!btn.hasAttribute('checked')) {
            noBtn.setAttribute('checked', true);
            noLabel.classList.add('btn-success');
            noLabel.classList.remove('btn-secondary');

            yesBtn.removeAttribute('checked');
            yesLabel.classList.remove('btn-success');
            yesLabel.classList.add('btn-secondary');
        }
    }

    btnParent.getAttribute('id').includes('term') ? updateTerm(btnParent) : updateReview(btnParent);
}

function updateReview(parent) {
    var formData = new FormData();
    var yesBtn = parent.children[0];
    var noBtn = parent.children[2];
    var showReview = null;

    if (yesBtn.hasAttribute('checked')) {
        showReview = 1;
    } else if (noBtn.hasAttribute('checked')) {
        showReview = 0;
    }

    if (showReview !== null) {
        formData.append('show_review', showReview);
        formData.append('review_id', parent.getAttribute('id'));

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName('alertBody')[0].innerHTML = this.responseText;
                mdb.Alert.getInstance(document.getElementById('return-data-alert')).show();
            }
        }

        xhttp.open("POST", "/admin_reviews", true);
        xhttp.setRequestHeader("X-CSRF-TOKEN", document.getElementsByName('csrf-token')[0].getAttribute('content'));
        xhttp.send(formData);
    }
}

function updateTerm(parent) {
    var formData = new FormData();
    var yesBtn = parent.children[0];
    var noBtn = parent.children[2];
    var showTerm = null;

    if (yesBtn.hasAttribute('checked')) {
        showTerm = 1;
    } else if (noBtn.hasAttribute('checked')) {
        showTerm = 0;
    }

    if (showTerm !== null) {
        formData.append('show_term', showTerm);
        formData.append('term_id', parent.getAttribute('id'));

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName('alertBody')[0].innerHTML = this.responseText;
                mdb.Alert.getInstance(document.getElementById('return-data-alert')).show();
            }
        }

        xhttp.open("POST", "/admin_terms", true);
        xhttp.setRequestHeader("X-CSRF-TOKEN", document.getElementsByName('csrf-token')[0].getAttribute('content'));
        xhttp.send(formData);
    }
}

function addDeleteMessagesBtn() {
    const paginationDiv = document.getElementsByClassName('datatable-pagination')[0];
    const paginationWrapper = document.getElementsByClassName('datatable-select-wrapper')[0];
    var deleteBtn = document.createElement("button");
    var checkBoxesCount = document.getElementsByClassName('form-check-input').length;
    var checkedCount = 0;

    if (checkBoxesCount >= 1 && document.getElementsByClassName('removeMessagesBtn').length === 0) {
        const animate = new mdb.Animate(deleteBtn, {
            animation: 'fly-in',
        });

        deleteBtn.id = "remove-message-btn";
        deleteBtn.className = "btn btn-danger me-auto removeMessagesBtn";
        deleteBtn.innerHTML = "Remove Selected Messages";
        deleteBtn.setAttribute('type','submit');
        deleteBtn.setAttribute('onclick','event.preventDefault(); document.getElementById(\'messages-remove-form\').submit();');
        paginationDiv.insertBefore(deleteBtn, paginationWrapper);

        animate.init();
        animate.startAnimation();
    } else {
        const element = document.getElementById('remove-message-btn');
        const animate = new mdb.Animate(element, {
            animation: 'fly-out',
            onEnd: function () { element.remove(); }
        });
        var x = 0;

        for (x; x < document.getElementsByClassName('form-check-input').length; x++) {
            if (document.getElementsByClassName('form-check-input')[x].checked) {
                checkedCount++;
            }
        }

        if (checkedCount === 0 && document.getElementsByClassName('removeMessagesBtn').length === 1) {
            animate.init();
            animate.startAnimation();
        }
    }

}
