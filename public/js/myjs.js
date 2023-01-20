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
                var main = document.querySelector('main');
                var alert = document.createElement('div');
                alert.innerHTML = "<div class='alert' role='alert' data-mdb-color='primary'><i class='fas fa-info-circle me-3'></i>A simple primary alert—check it out! </div>";

                main.append(alert);
                mdb.Alert.getInstance(document.getElementById('show-example')).show();
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
                var main = document.querySelector('main');
                var alert = document.createElement('div');
                alert.innerHTML = "<div class='alert' role='alert' data-mdb-color='primary'><i class='fas fa-info-circle me-3'></i>A simple primary alert—check it out! </div>";

                main.append(alert);
                mdb.Alert.getInstance(document.getElementById('show-example')).show();
            }
        }

        xhttp.open("POST", "/admin_terms", true);
        xhttp.setRequestHeader("X-CSRF-TOKEN", document.getElementsByName('csrf-token')[0].getAttribute('content'));
        xhttp.send(formData);
    }
}

// function removeMessage(btn) {
//
// }
