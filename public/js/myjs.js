function radioSwitch(btn) {
    var btnParent = btn.parentElement;
    var yesBtn = btnParent.children[0];
    var yesLabel = btnParent.children[1];
    var noBtn = btnParent.children[2];
    var noLabel = btnParent.children[3];
    var showReview = null;
    var reviewID = btnParent.getAttribute('id');
    var formData = new FormData();

    if(btn == yesBtn) {
        if(!btn.hasAttribute('checked')) {
            yesBtn.setAttribute('checked', true);
            yesLabel.classList.add('btn-success');
            yesLabel.classList.remove('btn-secondary');

            noBtn.removeAttribute('checked');
            noLabel.classList.remove('btn-success');
            noLabel.classList.add('btn-secondary');

            showReview = 1;
        }
    } else {
        if(!btn.hasAttribute('checked')) {
            noBtn.setAttribute('checked', true);
            noLabel.classList.add('btn-success');
            noLabel.classList.remove('btn-secondary');

            yesBtn.removeAttribute('checked');
            yesLabel.classList.remove('btn-success');
            yesLabel.classList.add('btn-secondary');

            showReview = 0;
        }
    }

    if(showReview !== null) {
        formData.append('show_review', showReview);
        formData.append('review_id', reviewID);

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
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
