<style>
    .review-list ul li .left span {
        width: 32px;
        height: 32px;
        display: inline-block;
    }

    .review-list ul li .left {
        flex: none;
        max-width: none;
        margin: 0 10px 0 0;
    }

    .review-list ul li .left span img {
        border-radius: 50%;
    }

    .review-list ul li .right h4 {
        font-size: 16px;
        margin: 0;
        display: flex;
    }

    .review-list ul li .right h4 .gig-rating {
        display: flex;
        align-items: center;
        margin-left: 10px;
        color: #ffbf00;
    }

    .review-list ul li .right h4 .gig-rating svg {
        margin: 0 4px 0 0px;
    }

    .country .country-flag {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
        margin: 0 7px 0 0px;
        border: 1px solid #fff;
        border-radius: 50px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .country .country-name {
        color: #95979d;
        font-size: 13px;
        font-weight: 600;
    }

    .review-list ul li {
        border-bottom: 1px solid #dadbdd;
        padding: 0 0 30px;
        margin: 0 0 30px;
    }

    .review-list ul li .right {
        flex: auto;
    }

    .review-list ul li .review-description {
        margin: 20px 0 0;
    }

    .review-list ul li .review-description p {
        font-size: 14px;
        margin: 0;
    }

    .review-list ul li .publish {
        font-size: 13px;
        color: #95979d;
    }

    .review-section h4 {
        font-size: 20px;
        color: #222325;
        font-weight: 700;
    }

    .review-section .stars-counters tr .stars-filter.fit-button {
        padding: 6px;
        border: none;
        color: #4a73e8;
        text-align: left;
    }

    .review-section .fit-progressbar-bar .fit-progressbar-background {
        position: relative;
        height: 8px;
        background: #efeff0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
        ;
        border-radius: 999px;
    }

    .review-section .stars-counters tr .star-progress-bar .progress-fill {
        background-color: #ffb33e;
    }

    .review-section .fit-progressbar-bar .progress-fill {
        background: #2cdd9b;
        background-color: rgb(29, 191, 115);
        height: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
        border-radius: 999px;
    }

    .review-section .fit-progressbar-bar {
        display: flex;
        align-items: center;
    }

    .review-section .stars-counters td {
        white-space: nowrap;
    }

    .review-section .stars-counters tr .progress-bar-container {
        width: 100%;
        padding: 0 10px 0 6px;
        margin: auto;
    }

    .ranking h6 {
        font-weight: 600;
        padding-bottom: 16px;
    }

    .ranking li {
        display: flex;
        justify-content: space-between;
        color: #95979d;
        padding-bottom: 8px;
    }

    .review-section .stars-counters td.star-num {
        color: #4a73e8;
    }

    .ranking li>span {
        color: #62646a;
        white-space: nowrap;
        margin-left: 12px;
    }

    .review-section {
        border-bottom: 1px solid #dadbdd;
        padding-bottom: 24px;
        margin-bottom: 34px;
        padding-top: 64px;
    }

    .review-section select,
    .review-section .select2-container {
        width: 188px !important;
        border-radius: 3px;
    }

    ul,
    ul li {
        list-style: none;
        margin: 0px;
    }

    .helpful-thumbs,
    .helpful-thumb {
        display: flex;
        align-items: center;
        font-weight: 700;
    }
</style>

<div class="container">
    <div id="reviews" class="review-section">

        <div class="row">
            <div class="col-lg-2  text-lg-start text-center">
                <div class="ranking">
                    <h6 class="text-display-7">Star Rating</h6>
                    <h3>4.7</h3>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="m-0">100+ Reviews</h4>


                </div>
                <table class="stars-counters">
                    <tbody>
                        <tr class="">
                            <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                </span>
                            </td>
                            <td class="progress-bar-container">
                                <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                    <div class="fit-progressbar-background">
                                        <span class="progress-fill" style="width: 97.2973%;"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="star-num">(83)</td>
                        </tr>
                        <tr class="">
                            <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">4 Stars</button>
                                </span>
                            </td>
                            <td class="progress-bar-container">
                                <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                    <div class="fit-progressbar-background">
                                        <span class="progress-fill" style="width: 2.2973%;"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="star-num">(38)</td>
                        </tr>
                        <tr class="">
                            <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">3 Stars</button>
                                </span>
                            </td>
                            <td class="progress-bar-container">
                                <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                    <div class="fit-progressbar-background">
                                        <span class="progress-fill" style="width: 1%;"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="star-num">(2)</td>
                        </tr>
                        <tr class="">
                            <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">2 Stars</button>
                                </span>
                            </td>
                            <td class="progress-bar-container">
                                <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                    <div class="fit-progressbar-background">
                                        <span class="progress-fill" style="width: 0;"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="star-num">(0)</td>
                        </tr>
                        <tr class="">
                            <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">1 Stars</button>
                                </span>
                            </td>
                            <td class="progress-bar-container">
                                <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                    <div class="fit-progressbar-background">
                                        <span class="progress-fill" style="width: 0;"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="star-num">(0)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-end ">
                <button class="btn btn-success " style="margin-top: 90px;" onclick="OpenBootstrapPopup()"> Book Now</button>
            </div>

        </div>
    </div>


</div>