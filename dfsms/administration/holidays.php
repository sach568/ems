<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
	<title>Holiday - PayDay</title>
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/core.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/fontawesome.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/dropzone.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/vendor/summernote/summernote-bs4.css">
	<style>
	.swal2-popup.swal2-toast {
		flex-direction: row;
		align-items: center;
		width: auto;
		padding: .625em;
		overflow-y: hidden;
		background: #fff;
		box-shadow: 0 0 .625em #d9d9d9
	}
	
	.swal2-popup.swal2-toast .swal2-header {
		flex-direction: row;
		padding: 0
	}
	
	.swal2-popup.swal2-toast .swal2-title {
		flex-grow: 1;
		justify-content: flex-start;
		margin: 0 .6em;
		font-size: 1em
	}
	
	.swal2-popup.swal2-toast .swal2-footer {
		margin: .5em 0 0;
		padding: .5em 0 0;
		font-size: .8em
	}
	
	.swal2-popup.swal2-toast .swal2-close {
		position: static;
		width: .8em;
		height: .8em;
		line-height: .8
	}
	
	.swal2-popup.swal2-toast .swal2-content {
		justify-content: flex-start;
		padding: 0;
		font-size: 1em
	}
	
	.swal2-popup.swal2-toast .swal2-icon {
		width: 2em;
		min-width: 2em;
		height: 2em;
		margin: 0
	}
	
	.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
		display: flex;
		align-items: center;
		font-size: 1.8em;
		font-weight: 700
	}
	
	@media all and (-ms-high-contrast:none),
	(-ms-high-contrast:active) {
		.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
			font-size: .25em
		}
	}
	
	.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
		width: 2em;
		height: 2em
	}
	
	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
		top: .875em;
		width: 1.375em
	}
	
	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
		left: .3125em
	}
	
	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
		right: .3125em
	}
	
	.swal2-popup.swal2-toast .swal2-actions {
		flex-basis: auto!important;
		width: auto;
		height: auto;
		margin: 0 .3125em
	}
	
	.swal2-popup.swal2-toast .swal2-styled {
		margin: 0 .3125em;
		padding: .3125em .625em;
		font-size: 1em
	}
	
	.swal2-popup.swal2-toast .swal2-styled:focus {
		box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
	}
	
	.swal2-popup.swal2-toast .swal2-success {
		border-color: #a5dc86
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
		position: absolute;
		width: 1.6em;
		height: 3em;
		transform: rotate(45deg);
		border-radius: 50%
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
		top: -.8em;
		left: -.5em;
		transform: rotate(-45deg);
		transform-origin: 2em 2em;
		border-radius: 4em 0 0 4em
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
		top: -.25em;
		left: .9375em;
		transform-origin: 0 1.5em;
		border-radius: 0 4em 4em 0
	}
	
	.swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
		width: 2em;
		height: 2em
	}
	
	.swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
		top: 0;
		left: .4375em;
		width: .4375em;
		height: 2.6875em
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
		height: .3125em
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
		top: 1.125em;
		left: .1875em;
		width: .75em
	}
	
	.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
		top: .9375em;
		right: .1875em;
		width: 1.375em
	}
	
	.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
		-webkit-animation: swal2-toast-animate-success-line-tip .75s;
		animation: swal2-toast-animate-success-line-tip .75s
	}
	
	.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
		-webkit-animation: swal2-toast-animate-success-line-long .75s;
		animation: swal2-toast-animate-success-line-long .75s
	}
	
	.swal2-popup.swal2-toast.swal2-show {
		-webkit-animation: swal2-toast-show .5s;
		animation: swal2-toast-show .5s
	}
	
	.swal2-popup.swal2-toast.swal2-hide {
		-webkit-animation: swal2-toast-hide .1s forwards;
		animation: swal2-toast-hide .1s forwards
	}
	
	.swal2-container {
		display: flex;
		position: fixed;
		z-index: 1060;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		padding: .625em;
		overflow-x: hidden;
		transition: background-color .1s;
		-webkit-overflow-scrolling: touch
	}
	
	.swal2-container.swal2-backdrop-show,
	.swal2-container.swal2-noanimation {
		background: rgba(0, 0, 0, .4)
	}
	
	.swal2-container.swal2-backdrop-hide {
		background: 0 0!important
	}
	
	.swal2-container.swal2-top {
		align-items: flex-start
	}
	
	.swal2-container.swal2-top-left,
	.swal2-container.swal2-top-start {
		align-items: flex-start;
		justify-content: flex-start
	}
	
	.swal2-container.swal2-top-end,
	.swal2-container.swal2-top-right {
		align-items: flex-start;
		justify-content: flex-end
	}
	
	.swal2-container.swal2-center {
		align-items: center
	}
	
	.swal2-container.swal2-center-left,
	.swal2-container.swal2-center-start {
		align-items: center;
		justify-content: flex-start
	}
	
	.swal2-container.swal2-center-end,
	.swal2-container.swal2-center-right {
		align-items: center;
		justify-content: flex-end
	}
	
	.swal2-container.swal2-bottom {
		align-items: flex-end
	}
	
	.swal2-container.swal2-bottom-left,
	.swal2-container.swal2-bottom-start {
		align-items: flex-end;
		justify-content: flex-start
	}
	
	.swal2-container.swal2-bottom-end,
	.swal2-container.swal2-bottom-right {
		align-items: flex-end;
		justify-content: flex-end
	}
	
	.swal2-container.swal2-bottom-end>:first-child,
	.swal2-container.swal2-bottom-left>:first-child,
	.swal2-container.swal2-bottom-right>:first-child,
	.swal2-container.swal2-bottom-start>:first-child,
	.swal2-container.swal2-bottom>:first-child {
		margin-top: auto
	}
	
	.swal2-container.swal2-grow-fullscreen>.swal2-modal {
		display: flex!important;
		flex: 1;
		align-self: stretch;
		justify-content: center
	}
	
	.swal2-container.swal2-grow-row>.swal2-modal {
		display: flex!important;
		flex: 1;
		align-content: center;
		justify-content: center
	}
	
	.swal2-container.swal2-grow-column {
		flex: 1;
		flex-direction: column
	}
	
	.swal2-container.swal2-grow-column.swal2-bottom,
	.swal2-container.swal2-grow-column.swal2-center,
	.swal2-container.swal2-grow-column.swal2-top {
		align-items: center
	}
	
	.swal2-container.swal2-grow-column.swal2-bottom-left,
	.swal2-container.swal2-grow-column.swal2-bottom-start,
	.swal2-container.swal2-grow-column.swal2-center-left,
	.swal2-container.swal2-grow-column.swal2-center-start,
	.swal2-container.swal2-grow-column.swal2-top-left,
	.swal2-container.swal2-grow-column.swal2-top-start {
		align-items: flex-start
	}
	
	.swal2-container.swal2-grow-column.swal2-bottom-end,
	.swal2-container.swal2-grow-column.swal2-bottom-right,
	.swal2-container.swal2-grow-column.swal2-center-end,
	.swal2-container.swal2-grow-column.swal2-center-right,
	.swal2-container.swal2-grow-column.swal2-top-end,
	.swal2-container.swal2-grow-column.swal2-top-right {
		align-items: flex-end
	}
	
	.swal2-container.swal2-grow-column>.swal2-modal {
		display: flex!important;
		flex: 1;
		align-content: center;
		justify-content: center
	}
	
	.swal2-container.swal2-no-transition {
		transition: none!important
	}
	
	.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
		margin: auto
	}
	
	@media all and (-ms-high-contrast:none),
	(-ms-high-contrast:active) {
		.swal2-container .swal2-modal {
			margin: 0!important
		}
	}
	
	.swal2-popup {
		display: none;
		position: relative;
		box-sizing: border-box;
		flex-direction: column;
		justify-content: center;
		width: 32em;
		max-width: 100%;
		padding: 1.25em;
		border: none;
		border-radius: .3125em;
		background: #fff;
		font-family: inherit;
		font-size: 1rem
	}
	
	.swal2-popup:focus {
		outline: 0
	}
	
	.swal2-popup.swal2-loading {
		overflow-y: hidden
	}
	
	.swal2-header {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 0 1.8em
	}
	
	.swal2-title {
		position: relative;
		max-width: 100%;
		margin: 0 0 .4em;
		padding: 0;
		color: #595959;
		font-size: 1.875em;
		font-weight: 600;
		text-align: center;
		text-transform: none;
		word-wrap: break-word
	}
	
	.swal2-actions {
		display: flex;
		z-index: 1;
		flex-wrap: wrap;
		align-items: center;
		justify-content: center;
		width: 100%;
		margin: 1.25em auto 0
	}
	
	.swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
		opacity: .4
	}
	
	.swal2-actions:not(.swal2-loading) .swal2-styled:hover {
		background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
	}
	
	.swal2-actions:not(.swal2-loading) .swal2-styled:active {
		background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
	}
	
	.swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
		box-sizing: border-box;
		width: 2.5em;
		height: 2.5em;
		margin: .46875em;
		padding: 0;
		-webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		border: .25em solid transparent;
		border-radius: 100%;
		border-color: transparent;
		background-color: transparent!important;
		color: transparent!important;
		cursor: default;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none
	}
	
	.swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
		margin-right: 30px;
		margin-left: 30px
	}
	
	.swal2-actions.swal2-loading:not(.swal2-styled).swal2-confirm::after {
		content: "";
		display: inline-block;
		width: 15px;
		height: 15px;
		margin-left: 5px;
		-webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		border: 3px solid #999;
		border-radius: 50%;
		border-right-color: transparent;
		box-shadow: 1px 1px 1px #fff
	}
	
	.swal2-styled {
		margin: .3125em;
		padding: .625em 2em;
		box-shadow: none;
		font-weight: 500
	}
	
	.swal2-styled:not([disabled]) {
		cursor: pointer
	}
	
	.swal2-styled.swal2-confirm {
		border: 0;
		border-radius: .25em;
		background: initial;
		background-color: #3085d6;
		color: #fff;
		font-size: 1.0625em
	}
	
	.swal2-styled.swal2-cancel {
		border: 0;
		border-radius: .25em;
		background: initial;
		background-color: #aaa;
		color: #fff;
		font-size: 1.0625em
	}
	
	.swal2-styled:focus {
		outline: 0;
		box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
	}
	
	.swal2-styled::-moz-focus-inner {
		border: 0
	}
	
	.swal2-footer {
		justify-content: center;
		margin: 1.25em 0 0;
		padding: 1em 0 0;
		border-top: 1px solid #eee;
		color: #545454;
		font-size: 1em
	}
	
	.swal2-timer-progress-bar-container {
		position: absolute;
		right: 0;
		bottom: 0;
		left: 0;
		height: .25em;
		overflow: hidden;
		border-bottom-right-radius: .3125em;
		border-bottom-left-radius: .3125em
	}
	
	.swal2-timer-progress-bar {
		width: 100%;
		height: .25em;
		background: rgba(0, 0, 0, .2)
	}
	
	.swal2-image {
		max-width: 100%;
		margin: 1.25em auto
	}
	
	.swal2-close {
		position: absolute;
		z-index: 2;
		top: 0;
		right: 0;
		align-items: center;
		justify-content: center;
		width: 1.2em;
		height: 1.2em;
		padding: 0;
		overflow: hidden;
		transition: color .1s ease-out;
		border: none;
		border-radius: 0;
		background: 0 0;
		color: #ccc;
		font-family: serif;
		font-size: 2.5em;
		line-height: 1.2;
		cursor: pointer
	}
	
	.swal2-close:hover {
		transform: none;
		background: 0 0;
		color: #f27474
	}
	
	.swal2-close::-moz-focus-inner {
		border: 0
	}
	
	.swal2-content {
		z-index: 1;
		justify-content: center;
		margin: 0;
		padding: 0 1.6em;
		color: #545454;
		font-size: 1.125em;
		font-weight: 400;
		line-height: normal;
		text-align: center;
		word-wrap: break-word
	}
	
	.swal2-checkbox,
	.swal2-file,
	.swal2-input,
	.swal2-radio,
	.swal2-select,
	.swal2-textarea {
		margin: 1em auto
	}
	
	.swal2-file,
	.swal2-input,
	.swal2-textarea {
		box-sizing: border-box;
		width: 100%;
		transition: border-color .3s, box-shadow .3s;
		border: 1px solid #d9d9d9;
		border-radius: .1875em;
		background: inherit;
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
		color: inherit;
		font-size: 1.125em
	}
	
	.swal2-file.swal2-inputerror,
	.swal2-input.swal2-inputerror,
	.swal2-textarea.swal2-inputerror {
		border-color: #f27474!important;
		box-shadow: 0 0 2px #f27474!important
	}
	
	.swal2-file:focus,
	.swal2-input:focus,
	.swal2-textarea:focus {
		border: 1px solid #b4dbed;
		outline: 0;
		box-shadow: 0 0 3px #c4e6f5
	}
	
	.swal2-file::-moz-placeholder,
	.swal2-input::-moz-placeholder,
	.swal2-textarea::-moz-placeholder {
		color: #ccc
	}
	
	.swal2-file:-ms-input-placeholder,
	.swal2-input:-ms-input-placeholder,
	.swal2-textarea:-ms-input-placeholder {
		color: #ccc
	}
	
	.swal2-file::-ms-input-placeholder,
	.swal2-input::-ms-input-placeholder,
	.swal2-textarea::-ms-input-placeholder {
		color: #ccc
	}
	
	.swal2-file::placeholder,
	.swal2-input::placeholder,
	.swal2-textarea::placeholder {
		color: #ccc
	}
	
	.swal2-range {
		margin: 1em auto;
		background: #fff
	}
	
	.swal2-range input {
		width: 80%
	}
	
	.swal2-range output {
		width: 20%;
		color: inherit;
		font-weight: 600;
		text-align: center
	}
	
	.swal2-range input,
	.swal2-range output {
		height: 2.625em;
		padding: 0;
		font-size: 1.125em;
		line-height: 2.625em
	}
	
	.swal2-input {
		height: 2.625em;
		padding: 0 .75em
	}
	
	.swal2-input[type=number] {
		max-width: 10em
	}
	
	.swal2-file {
		background: inherit;
		font-size: 1.125em
	}
	
	.swal2-textarea {
		height: 6.75em;
		padding: .75em
	}
	
	.swal2-select {
		min-width: 50%;
		max-width: 100%;
		padding: .375em .625em;
		background: inherit;
		color: inherit;
		font-size: 1.125em
	}
	
	.swal2-checkbox,
	.swal2-radio {
		align-items: center;
		justify-content: center;
		background: #fff;
		color: inherit
	}
	
	.swal2-checkbox label,
	.swal2-radio label {
		margin: 0 .6em;
		font-size: 1.125em
	}
	
	.swal2-checkbox input,
	.swal2-radio input {
		margin: 0 .4em
	}
	
	.swal2-validation-message {
		display: none;
		align-items: center;
		justify-content: center;
		padding: .625em;
		overflow: hidden;
		background: #f0f0f0;
		color: #666;
		font-size: 1em;
		font-weight: 300
	}
	
	.swal2-validation-message::before {
		content: "!";
		display: inline-block;
		width: 1.5em;
		min-width: 1.5em;
		height: 1.5em;
		margin: 0 .625em;
		border-radius: 50%;
		background-color: #f27474;
		color: #fff;
		font-weight: 600;
		line-height: 1.5em;
		text-align: center
	}
	
	.swal2-icon {
		position: relative;
		box-sizing: content-box;
		justify-content: center;
		width: 5em;
		height: 5em;
		margin: 1.25em auto 1.875em;
		border: .25em solid transparent;
		border-radius: 50%;
		font-family: inherit;
		line-height: 5em;
		cursor: default;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none
	}
	
	.swal2-icon .swal2-icon-content {
		display: flex;
		align-items: center;
		font-size: 3.75em
	}
	
	.swal2-icon.swal2-error {
		border-color: #f27474;
		color: #f27474
	}
	
	.swal2-icon.swal2-error .swal2-x-mark {
		position: relative;
		flex-grow: 1
	}
	
	.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
		display: block;
		position: absolute;
		top: 2.3125em;
		width: 2.9375em;
		height: .3125em;
		border-radius: .125em;
		background-color: #f27474
	}
	
	.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
		left: 1.0625em;
		transform: rotate(45deg)
	}
	
	.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
		right: 1em;
		transform: rotate(-45deg)
	}
	
	.swal2-icon.swal2-error.swal2-icon-show {
		-webkit-animation: swal2-animate-error-icon .5s;
		animation: swal2-animate-error-icon .5s
	}
	
	.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
		-webkit-animation: swal2-animate-error-x-mark .5s;
		animation: swal2-animate-error-x-mark .5s
	}
	
	.swal2-icon.swal2-warning {
		border-color: #facea8;
		color: #f8bb86
	}
	
	.swal2-icon.swal2-info {
		border-color: #9de0f6;
		color: #3fc3ee
	}
	
	.swal2-icon.swal2-question {
		border-color: #c9dae1;
		color: #87adbd
	}
	
	.swal2-icon.swal2-success {
		border-color: #a5dc86;
		color: #a5dc86
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-circular-line] {
		position: absolute;
		width: 3.75em;
		height: 7.5em;
		transform: rotate(45deg);
		border-radius: 50%
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
		top: -.4375em;
		left: -2.0635em;
		transform: rotate(-45deg);
		transform-origin: 3.75em 3.75em;
		border-radius: 7.5em 0 0 7.5em
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
		top: -.6875em;
		left: 1.875em;
		transform: rotate(-45deg);
		transform-origin: 0 3.75em;
		border-radius: 0 7.5em 7.5em 0
	}
	
	.swal2-icon.swal2-success .swal2-success-ring {
		position: absolute;
		z-index: 2;
		top: -.25em;
		left: -.25em;
		box-sizing: content-box;
		width: 100%;
		height: 100%;
		border: .25em solid rgba(165, 220, 134, .3);
		border-radius: 50%
	}
	
	.swal2-icon.swal2-success .swal2-success-fix {
		position: absolute;
		z-index: 1;
		top: .5em;
		left: 1.625em;
		width: .4375em;
		height: 5.625em;
		transform: rotate(-45deg)
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-line] {
		display: block;
		position: absolute;
		z-index: 2;
		height: .3125em;
		border-radius: .125em;
		background-color: #a5dc86
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
		top: 2.875em;
		left: .8125em;
		width: 1.5625em;
		transform: rotate(45deg)
	}
	
	.swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
		top: 2.375em;
		right: .5em;
		width: 2.9375em;
		transform: rotate(-45deg)
	}
	
	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
		-webkit-animation: swal2-animate-success-line-tip .75s;
		animation: swal2-animate-success-line-tip .75s
	}
	
	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
		-webkit-animation: swal2-animate-success-line-long .75s;
		animation: swal2-animate-success-line-long .75s
	}
	
	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
		-webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
		animation: swal2-rotate-success-circular-line 4.25s ease-in
	}
	
	.swal2-progress-steps {
		align-items: center;
		margin: 0 0 1.25em;
		padding: 0;
		background: inherit;
		font-weight: 600
	}
	
	.swal2-progress-steps li {
		display: inline-block;
		position: relative
	}
	
	.swal2-progress-steps .swal2-progress-step {
		z-index: 20;
		width: 2em;
		height: 2em;
		border-radius: 2em;
		background: #3085d6;
		color: #fff;
		line-height: 2em;
		text-align: center
	}
	
	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
		background: #3085d6
	}
	
	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
		background: #add8e6;
		color: #fff
	}
	
	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
		background: #add8e6
	}
	
	.swal2-progress-steps .swal2-progress-step-line {
		z-index: 10;
		width: 2.5em;
		height: .4em;
		margin: 0 -1px;
		background: #3085d6
	}
	
	[class^=swal2] {
		-webkit-tap-highlight-color: transparent
	}
	
	.swal2-show {
		-webkit-animation: swal2-show .3s;
		animation: swal2-show .3s
	}
	
	.swal2-hide {
		-webkit-animation: swal2-hide .15s forwards;
		animation: swal2-hide .15s forwards
	}
	
	.swal2-noanimation {
		transition: none
	}
	
	.swal2-scrollbar-measure {
		position: absolute;
		top: -9999px;
		width: 50px;
		height: 50px;
		overflow: scroll
	}
	
	.swal2-rtl .swal2-close {
		right: auto;
		left: 0
	}
	
	.swal2-rtl .swal2-timer-progress-bar {
		right: 0;
		left: auto
	}
	
	@supports (-ms-accelerator:true) {
		.swal2-range input {
			width: 100%!important
		}
		.swal2-range output {
			display: none
		}
	}
	
	@media all and (-ms-high-contrast:none),
	(-ms-high-contrast:active) {
		.swal2-range input {
			width: 100%!important
		}
		.swal2-range output {
			display: none
		}
	}
	
	@-moz-document url-prefix() {
		.swal2-close:focus {
			outline: 2px solid rgba(50, 100, 150, .4)
		}
	}
	
	@-webkit-keyframes swal2-toast-show {
		0% {
			transform: translateY(-.625em) rotateZ(2deg)
		}
		33% {
			transform: translateY(0) rotateZ(-2deg)
		}
		66% {
			transform: translateY(.3125em) rotateZ(2deg)
		}
		100% {
			transform: translateY(0) rotateZ(0)
		}
	}
	
	@keyframes swal2-toast-show {
		0% {
			transform: translateY(-.625em) rotateZ(2deg)
		}
		33% {
			transform: translateY(0) rotateZ(-2deg)
		}
		66% {
			transform: translateY(.3125em) rotateZ(2deg)
		}
		100% {
			transform: translateY(0) rotateZ(0)
		}
	}
	
	@-webkit-keyframes swal2-toast-hide {
		100% {
			transform: rotateZ(1deg);
			opacity: 0
		}
	}
	
	@keyframes swal2-toast-hide {
		100% {
			transform: rotateZ(1deg);
			opacity: 0
		}
	}
	
	@-webkit-keyframes swal2-toast-animate-success-line-tip {
		0% {
			top: .5625em;
			left: .0625em;
			width: 0
		}
		54% {
			top: .125em;
			left: .125em;
			width: 0
		}
		70% {
			top: .625em;
			left: -.25em;
			width: 1.625em
		}
		84% {
			top: 1.0625em;
			left: .75em;
			width: .5em
		}
		100% {
			top: 1.125em;
			left: .1875em;
			width: .75em
		}
	}
	
	@keyframes swal2-toast-animate-success-line-tip {
		0% {
			top: .5625em;
			left: .0625em;
			width: 0
		}
		54% {
			top: .125em;
			left: .125em;
			width: 0
		}
		70% {
			top: .625em;
			left: -.25em;
			width: 1.625em
		}
		84% {
			top: 1.0625em;
			left: .75em;
			width: .5em
		}
		100% {
			top: 1.125em;
			left: .1875em;
			width: .75em
		}
	}
	
	@-webkit-keyframes swal2-toast-animate-success-line-long {
		0% {
			top: 1.625em;
			right: 1.375em;
			width: 0
		}
		65% {
			top: 1.25em;
			right: .9375em;
			width: 0
		}
		84% {
			top: .9375em;
			right: 0;
			width: 1.125em
		}
		100% {
			top: .9375em;
			right: .1875em;
			width: 1.375em
		}
	}
	
	@keyframes swal2-toast-animate-success-line-long {
		0% {
			top: 1.625em;
			right: 1.375em;
			width: 0
		}
		65% {
			top: 1.25em;
			right: .9375em;
			width: 0
		}
		84% {
			top: .9375em;
			right: 0;
			width: 1.125em
		}
		100% {
			top: .9375em;
			right: .1875em;
			width: 1.375em
		}
	}
	
	@-webkit-keyframes swal2-show {
		0% {
			transform: scale(.7)
		}
		45% {
			transform: scale(1.05)
		}
		80% {
			transform: scale(.95)
		}
		100% {
			transform: scale(1)
		}
	}
	
	@keyframes swal2-show {
		0% {
			transform: scale(.7)
		}
		45% {
			transform: scale(1.05)
		}
		80% {
			transform: scale(.95)
		}
		100% {
			transform: scale(1)
		}
	}
	
	@-webkit-keyframes swal2-hide {
		0% {
			transform: scale(1);
			opacity: 1
		}
		100% {
			transform: scale(.5);
			opacity: 0
		}
	}
	
	@keyframes swal2-hide {
		0% {
			transform: scale(1);
			opacity: 1
		}
		100% {
			transform: scale(.5);
			opacity: 0
		}
	}
	
	@-webkit-keyframes swal2-animate-success-line-tip {
		0% {
			top: 1.1875em;
			left: .0625em;
			width: 0
		}
		54% {
			top: 1.0625em;
			left: .125em;
			width: 0
		}
		70% {
			top: 2.1875em;
			left: -.375em;
			width: 3.125em
		}
		84% {
			top: 3em;
			left: 1.3125em;
			width: 1.0625em
		}
		100% {
			top: 2.8125em;
			left: .8125em;
			width: 1.5625em
		}
	}
	
	@keyframes swal2-animate-success-line-tip {
		0% {
			top: 1.1875em;
			left: .0625em;
			width: 0
		}
		54% {
			top: 1.0625em;
			left: .125em;
			width: 0
		}
		70% {
			top: 2.1875em;
			left: -.375em;
			width: 3.125em
		}
		84% {
			top: 3em;
			left: 1.3125em;
			width: 1.0625em
		}
		100% {
			top: 2.8125em;
			left: .8125em;
			width: 1.5625em
		}
	}
	
	@-webkit-keyframes swal2-animate-success-line-long {
		0% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}
		65% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}
		84% {
			top: 2.1875em;
			right: 0;
			width: 3.4375em
		}
		100% {
			top: 2.375em;
			right: .5em;
			width: 2.9375em
		}
	}
	
	@keyframes swal2-animate-success-line-long {
		0% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}
		65% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}
		84% {
			top: 2.1875em;
			right: 0;
			width: 3.4375em
		}
		100% {
			top: 2.375em;
			right: .5em;
			width: 2.9375em
		}
	}
	
	@-webkit-keyframes swal2-rotate-success-circular-line {
		0% {
			transform: rotate(-45deg)
		}
		5% {
			transform: rotate(-45deg)
		}
		12% {
			transform: rotate(-405deg)
		}
		100% {
			transform: rotate(-405deg)
		}
	}
	
	@keyframes swal2-rotate-success-circular-line {
		0% {
			transform: rotate(-45deg)
		}
		5% {
			transform: rotate(-45deg)
		}
		12% {
			transform: rotate(-405deg)
		}
		100% {
			transform: rotate(-405deg)
		}
	}
	
	@-webkit-keyframes swal2-animate-error-x-mark {
		0% {
			margin-top: 1.625em;
			transform: scale(.4);
			opacity: 0
		}
		50% {
			margin-top: 1.625em;
			transform: scale(.4);
			opacity: 0
		}
		80% {
			margin-top: -.375em;
			transform: scale(1.15)
		}
		100% {
			margin-top: 0;
			transform: scale(1);
			opacity: 1
		}
	}
	
	@keyframes swal2-animate-error-x-mark {
		0% {
			margin-top: 1.625em;
			transform: scale(.4);
			opacity: 0
		}
		50% {
			margin-top: 1.625em;
			transform: scale(.4);
			opacity: 0
		}
		80% {
			margin-top: -.375em;
			transform: scale(1.15)
		}
		100% {
			margin-top: 0;
			transform: scale(1);
			opacity: 1
		}
	}
	
	@-webkit-keyframes swal2-animate-error-icon {
		0% {
			transform: rotateX(100deg);
			opacity: 0
		}
		100% {
			transform: rotateX(0);
			opacity: 1
		}
	}
	
	@keyframes swal2-animate-error-icon {
		0% {
			transform: rotateX(100deg);
			opacity: 0
		}
		100% {
			transform: rotateX(0);
			opacity: 1
		}
	}
	
	@-webkit-keyframes swal2-rotate-loading {
		0% {
			transform: rotate(0)
		}
		100% {
			transform: rotate(360deg)
		}
	}
	
	@keyframes swal2-rotate-loading {
		0% {
			transform: rotate(0)
		}
		100% {
			transform: rotate(360deg)
		}
	}
	
	body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
		overflow: hidden
	}
	
	body.swal2-height-auto {
		height: auto!important
	}
	
	body.swal2-no-backdrop .swal2-container {
		top: auto;
		right: auto;
		bottom: auto;
		left: auto;
		max-width: calc(100% - .625em * 2);
		background-color: transparent!important
	}
	
	body.swal2-no-backdrop .swal2-container>.swal2-modal {
		box-shadow: 0 0 10px rgba(0, 0, 0, .4)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-top {
		top: 0;
		left: 50%;
		transform: translateX(-50%)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-top-left,
	body.swal2-no-backdrop .swal2-container.swal2-top-start {
		top: 0;
		left: 0
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-top-end,
	body.swal2-no-backdrop .swal2-container.swal2-top-right {
		top: 0;
		right: 0
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-center {
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-center-left,
	body.swal2-no-backdrop .swal2-container.swal2-center-start {
		top: 50%;
		left: 0;
		transform: translateY(-50%)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-center-end,
	body.swal2-no-backdrop .swal2-container.swal2-center-right {
		top: 50%;
		right: 0;
		transform: translateY(-50%)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-bottom {
		bottom: 0;
		left: 50%;
		transform: translateX(-50%)
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
	body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
		bottom: 0;
		left: 0
	}
	
	body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
	body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
		right: 0;
		bottom: 0
	}
	
	@media print {
		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
			overflow-y: scroll!important
		}
		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
			display: none
		}
		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
			position: static!important
		}
	}
	
	body.swal2-toast-shown .swal2-container {
		background-color: transparent
	}
	
	body.swal2-toast-shown .swal2-container.swal2-top {
		top: 0;
		right: auto;
		bottom: auto;
		left: 50%;
		transform: translateX(-50%)
	}
	
	body.swal2-toast-shown .swal2-container.swal2-top-end,
	body.swal2-toast-shown .swal2-container.swal2-top-right {
		top: 0;
		right: 0;
		bottom: auto;
		left: auto
	}
	
	body.swal2-toast-shown .swal2-container.swal2-top-left,
	body.swal2-toast-shown .swal2-container.swal2-top-start {
		top: 0;
		right: auto;
		bottom: auto;
		left: 0
	}
	
	body.swal2-toast-shown .swal2-container.swal2-center-left,
	body.swal2-toast-shown .swal2-container.swal2-center-start {
		top: 50%;
		right: auto;
		bottom: auto;
		left: 0;
		transform: translateY(-50%)
	}
	
	body.swal2-toast-shown .swal2-container.swal2-center {
		top: 50%;
		right: auto;
		bottom: auto;
		left: 50%;
		transform: translate(-50%, -50%)
	}
	
	body.swal2-toast-shown .swal2-container.swal2-center-end,
	body.swal2-toast-shown .swal2-container.swal2-center-right {
		top: 50%;
		right: 0;
		bottom: auto;
		left: auto;
		transform: translateY(-50%)
	}
	
	body.swal2-toast-shown .swal2-container.swal2-bottom-left,
	body.swal2-toast-shown .swal2-container.swal2-bottom-start {
		top: auto;
		right: auto;
		bottom: 0;
		left: 0
	}
	
	body.swal2-toast-shown .swal2-container.swal2-bottom {
		top: auto;
		right: auto;
		bottom: 0;
		left: 50%;
		transform: translateX(-50%)
	}
	
	body.swal2-toast-shown .swal2-container.swal2-bottom-end,
	body.swal2-toast-shown .swal2-container.swal2-bottom-right {
		top: auto;
		right: 0;
		bottom: 0;
		left: auto
	}
	
	body.swal2-toast-column .swal2-toast {
		flex-direction: column;
		align-items: stretch
	}
	
	body.swal2-toast-column .swal2-toast .swal2-actions {
		flex: 1;
		align-self: stretch;
		height: 2.2em;
		margin-top: .3125em
	}
	
	body.swal2-toast-column .swal2-toast .swal2-loading {
		justify-content: center
	}
	
	body.swal2-toast-column .swal2-toast .swal2-input {
		height: 2em;
		margin: .3125em auto;
		font-size: 1em
	}
	
	body.swal2-toast-column .swal2-toast .swal2-validation-message {
		font-size: 1em
	}
	</style>
	<style type="text/css">
	.vc-popover-content-wrapper[data-v-05016e86] {
		--popover-horizontal-content-offset: 8px;
		--popover-vertical-content-offset: 10px;
		--popover-slide-translation: 15px;
		--popover-transition-time: 0.14s ease-in-out;
		--popover-caret-horizontal-offset: 18px;
		--popover-caret-vertical-offset: 8px;
		position: absolute;
		display: block;
		outline: none;
		z-index: 10
	}
	
	.vc-popover-content-wrapper[data-v-05016e86]:not(.is-interactive) {
		pointer-events: none
	}
	
	.vc-popover-content[data-v-05016e86] {
		position: relative;
		outline: none;
		z-index: 10;
		box-shadow: var(--shadow-lg)
	}
	
	.vc-popover-content.direction-bottom[data-v-05016e86] {
		margin-top: var(--popover-vertical-content-offset)
	}
	
	.vc-popover-content.direction-top[data-v-05016e86] {
		margin-bottom: var(--popover-vertical-content-offset)
	}
	
	.vc-popover-content.direction-left[data-v-05016e86] {
		margin-right: var(--popover-horizontal-content-offset)
	}
	
	.vc-popover-content.direction-right[data-v-05016e86] {
		margin-left: var(--popover-horizontal-content-offset)
	}
	
	.vc-popover-caret[data-v-05016e86] {
		content: "";
		position: absolute;
		display: block;
		width: 12px;
		height: 12px;
		border-top: inherit;
		border-left: inherit;
		background-color: inherit;
		-webkit-user-select: none;
		user-select: none;
		z-index: -1
	}
	
	.vc-popover-caret.direction-bottom[data-v-05016e86] {
		top: 0
	}
	
	.vc-popover-caret.direction-bottom.align-left[data-v-05016e86] {
		transform: translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-bottom.align-center[data-v-05016e86] {
		transform: translateX(-50%) translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-bottom.align-right[data-v-05016e86] {
		transform: translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-top[data-v-05016e86] {
		top: 100%
	}
	
	.vc-popover-caret.direction-top.align-left[data-v-05016e86] {
		transform: translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-top.align-center[data-v-05016e86] {
		transform: translateX(-50%) translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-top.align-right[data-v-05016e86] {
		transform: translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-left[data-v-05016e86] {
		left: 100%
	}
	
	.vc-popover-caret.direction-left.align-top[data-v-05016e86] {
		transform: translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-left.align-middle[data-v-05016e86] {
		transform: translateY(-50%) translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-left.align-bottom[data-v-05016e86] {
		transform: translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-right[data-v-05016e86] {
		left: 0
	}
	
	.vc-popover-caret.direction-right.align-top[data-v-05016e86] {
		transform: translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.direction-right.align-middle[data-v-05016e86] {
		transform: translateY(-50%) translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.direction-right.align-bottom[data-v-05016e86] {
		transform: translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.align-left[data-v-05016e86] {
		left: var(--popover-caret-horizontal-offset)
	}
	
	.vc-popover-caret.align-center[data-v-05016e86] {
		left: 50%
	}
	
	.vc-popover-caret.align-right[data-v-05016e86] {
		right: var(--popover-caret-horizontal-offset)
	}
	
	.vc-popover-caret.align-top[data-v-05016e86] {
		top: var(--popover-caret-vertical-offset)
	}
	
	.vc-popover-caret.align-middle[data-v-05016e86] {
		top: 50%
	}
	
	.vc-popover-caret.align-bottom[data-v-05016e86] {
		bottom: var(--popover-caret-vertical-offset)
	}
	
	.fade-enter-active[data-v-05016e86],
	.fade-leave-active[data-v-05016e86],
	.slide-fade-enter-active[data-v-05016e86],
	.slide-fade-leave-active[data-v-05016e86] {
		transition: all var(--popover-transition-time);
		pointer-events: none
	}
	
	.fade-enter[data-v-05016e86],
	.fade-leave-to[data-v-05016e86],
	.slide-fade-enter[data-v-05016e86],
	.slide-fade-leave-to[data-v-05016e86] {
		opacity: 0
	}
	
	.slide-fade-enter.direction-bottom[data-v-05016e86],
	.slide-fade-leave-to.direction-bottom[data-v-05016e86] {
		transform: translateY(calc(var(--popover-slide-translation)*-1))
	}
	
	.slide-fade-enter.direction-top[data-v-05016e86],
	.slide-fade-leave-to.direction-top[data-v-05016e86] {
		transform: translateY(var(--popover-slide-translation))
	}
	
	.slide-fade-enter.direction-left[data-v-05016e86],
	.slide-fade-leave-to.direction-left[data-v-05016e86] {
		transform: translateX(var(--popover-slide-translation))
	}
	
	.slide-fade-enter.direction-right[data-v-05016e86],
	.slide-fade-leave-to.direction-right[data-v-05016e86] {
		transform: translateX(calc(var(--popover-slide-translation)*-1))
	}
	</style>
	<style type="text/css">
	.vc-day-popover-row[data-v-eb5afd1a] {
		--day-content-transition-time: 0.13s ease-in;
		display: flex;
		align-items: center;
		transition: all var(--day-content-transition-time)
	}
	
	.vc-day-popover-row[data-v-eb5afd1a]:not(:first-child) {
		margin-top: 3px
	}
	
	.vc-day-popover-row-indicator[data-v-eb5afd1a] {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-grow: 0;
		width: 15px;
		margin-right: 3px
	}
	
	.vc-day-popover-row-indicator span[data-v-eb5afd1a] {
		transition: all var(--day-content-transition-time)
	}
	
	.vc-day-popover-row-content[data-v-eb5afd1a] {
		display: flex;
		align-items: center;
		flex-wrap: none;
		flex-grow: 1;
		width: max-content
	}
	</style>
	<style type="text/css">
	.vc-svg-icon[data-v-63f7b5ec] {
		display: inline-block;
		stroke: currentColor;
		stroke-width: 0
	}
	
	.vc-svg-icon path[data-v-63f7b5ec] {
		fill: currentColor
	}
	</style>
	<style type="text/css">
	.vc-nav-header {
		display: flex;
		justify-content: space-between
	}
	
	.vc-nav-arrow {
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		line-height: var(--leading-snug);
		border-width: 2px;
		border-style: solid;
		border-color: transparent;
		border-radius: var(--rounded)
	}
	
	.vc-nav-arrow.is-left {
		margin-right: auto
	}
	
	.vc-nav-arrow.is-right {
		margin-left: auto
	}
	
	.vc-nav-arrow.is-disabled {
		opacity: .25;
		pointer-events: none;
		cursor: not-allowed
	}
	
	.vc-nav-arrow:hover {
		background-color: var(--gray-900)
	}
	
	.vc-nav-arrow:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-title {
		color: var(--accent-100);
		font-weight: var(--font-bold);
		line-height: var(--leading-snug);
		padding: 4px 8px;
		border-radius: var(--rounded);
		border-width: 2px;
		border-style: solid;
		border-color: transparent;
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-nav-title:hover {
		background-color: var(--gray-900)
	}
	
	.vc-nav-title:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-items {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		grid-row-gap: 2px;
		grid-column-gap: 5px
	}
	
	.vc-nav-item {
		width: 48px;
		text-align: center;
		line-height: var(--leading-snug);
		font-weight: var(--font-semibold);
		padding: 4px 0;
		cursor: pointer;
		border-color: transparent;
		border-width: 2px;
		border-style: solid;
		border-radius: var(--rounded);
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-nav-item:hover {
		color: var(--white);
		background-color: var(--gray-900);
		box-shadow: var(--shadow-inner)
	}
	
	.vc-nav-item.is-active {
		color: var(--accent-900);
		background: var(--accent-100);
		font-weight: var(--font-bold);
		box-shadow: var(--shadow)
	}
	
	.vc-nav-item.is-current {
		color: var(--accent-100);
		font-weight: var(--bold);
		border-color: var(--accent-100)
	}
	
	.vc-nav-item:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-item.is-disabled {
		opacity: .25;
		pointer-events: none
	}
	
	.vc-is-dark .vc-nav-title {
		color: var(--gray-900)
	}
	
	.vc-is-dark .vc-nav-title:hover {
		background-color: var(--gray-200)
	}
	
	.vc-is-dark .vc-nav-title:focus {
		border-color: var(--accent-400)
	}
	
	.vc-is-dark .vc-nav-arrow:hover {
		background-color: var(--gray-200)
	}
	
	.vc-is-dark .vc-nav-arrow:focus {
		border-color: var(--accent-400)
	}
	
	.vc-is-dark .vc-nav-item:hover {
		color: var(--gray-900);
		background-color: var(--gray-200);
		box-shadow: none
	}
	
	.vc-is-dark .vc-nav-item.is-active {
		color: var(--white);
		background: var(--accent-500)
	}
	
	.vc-is-dark .vc-nav-item.is-current {
		color: var(--accent-600);
		border-color: var(--accent-500)
	}
	
	.vc-is-dark .vc-nav-item:focus {
		border-color: var(--accent-400)
	}
	</style>
	<style type="text/css">
	.vc-day[data-v-4420d078] {
		position: relative;
		min-height: 32px;
		z-index: 1
	}
	
	.vc-day.is-not-in-month *[data-v-4420d078] {
		opacity: 0;
		pointer-events: none
	}
	
	.vc-day-layer[data-v-4420d078] {
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		pointer-events: none
	}
	
	.vc-day-box-center-center[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center;
		transform-origin: 50% 50%
	}
	
	.vc-day-box-left-center[data-v-4420d078] {
		display: flex;
		justify-content: flex-start;
		align-items: center;
		transform-origin: 0 50%
	}
	
	.vc-day-box-right-center[data-v-4420d078] {
		display: flex;
		justify-content: flex-end;
		align-items: center;
		transform-origin: 100% 50%
	}
	
	.vc-day-box-center-bottom[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: flex-end
	}
	
	.vc-day-content[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: var(--text-sm);
		font-weight: var(--font-medium);
		width: 28px;
		height: 28px;
		line-height: 28px;
		border-radius: var(--rounded-full);
		-webkit-user-select: none;
		user-select: none;
		cursor: pointer
	}
	
	.vc-day-content[data-v-4420d078]:hover {
		background-color: rgba(204, 214, 224, .3)
	}
	
	.vc-day-content[data-v-4420d078]:focus {
		font-weight: var(--font-bold);
		background-color: rgba(204, 214, 224, .4)
	}
	
	.vc-day-content.is-disabled[data-v-4420d078] {
		color: var(--gray-400)
	}
	
	.vc-is-dark .vc-day-content[data-v-4420d078]:hover {
		background-color: rgba(114, 129, 151, .3)
	}
	
	.vc-is-dark .vc-day-content[data-v-4420d078]:focus {
		background-color: rgba(114, 129, 151, .4)
	}
	
	.vc-is-dark .vc-day-content.is-disabled[data-v-4420d078] {
		color: var(--gray-600)
	}
	
	.vc-highlights[data-v-4420d078] {
		overflow: hidden;
		pointer-events: none;
		z-index: -1
	}
	
	.vc-highlight[data-v-4420d078] {
		width: 28px;
		height: 28px
	}
	
	.vc-highlight.vc-highlight-base-start[data-v-4420d078] {
		width: 50%!important;
		border-radius: 0!important;
		border-right-width: 0!important
	}
	
	.vc-highlight.vc-highlight-base-end[data-v-4420d078] {
		width: 50%!important;
		border-radius: 0!important;
		border-left-width: 0!important
	}
	
	.vc-highlight.vc-highlight-base-middle[data-v-4420d078] {
		width: 100%;
		border-radius: 0!important;
		border-left-width: 0!important;
		border-right-width: 0!important;
		margin: 0 -1px
	}
	
	.vc-dots[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center
	}
	
	.vc-dot[data-v-4420d078] {
		width: 5px;
		height: 5px;
		border-radius: 50%;
		transition: all var(--day-content-transition-time)
	}
	
	.vc-dot[data-v-4420d078]:not(:last-child) {
		margin-right: 3px
	}
	
	.vc-bars[data-v-4420d078] {
		display: flex;
		justify-content: flex-start;
		align-items: center;
		width: 75%
	}
	
	.vc-bar[data-v-4420d078] {
		flex-grow: 1;
		height: 3px;
		transition: all var(--day-content-transition-time)
	}
	</style>
	<style type="text/css">
	.vc-pane[data-v-74ad501d] {
		min-width: 250px
	}
	
	.vc-header[data-v-74ad501d] {
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 10px 18px 0 18px
	}
	
	.vc-header.align-left[data-v-74ad501d] {
		justify-content: flex-start
	}
	
	.vc-header.align-right[data-v-74ad501d] {
		justify-content: flex-end
	}
	
	.vc-title[data-v-74ad501d] {
		font-size: var(--text-lg);
		color: var(--gray-800);
		font-weight: var(--font-semibold);
		line-height: 28px;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		white-space: nowrap
	}
	
	.vc-title[data-v-74ad501d]:hover {
		opacity: .75
	}
	
	.vc-weeknumber[data-v-74ad501d] {
		position: relative
	}
	
	.vc-weeknumber[data-v-74ad501d],
	.vc-weeknumber-content[data-v-74ad501d] {
		display: flex;
		justify-content: center;
		align-items: center
	}
	
	.vc-weeknumber-content[data-v-74ad501d] {
		font-size: var(--text-xs);
		font-weight: var(--font-medium);
		font-style: italic;
		width: 28px;
		height: 28px;
		margin-top: 2px;
		color: var(--gray-500);
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-weeknumber-content.is-left-outside[data-v-74ad501d] {
		position: absolute;
		left: var(--weeknumber-offset)
	}
	
	.vc-weeknumber-content.is-right-outside[data-v-74ad501d] {
		position: absolute;
		right: var(--weeknumber-offset)
	}
	
	.vc-weeks[data-v-74ad501d] {
		display: grid;
		grid-template-columns: repeat(7, 1fr);
		position: relative;
		-webkit-overflow-scrolling: touch;
		padding: 5px;
		min-width: 250px
	}
	
	.vc-weeks.vc-show-weeknumbers[data-v-74ad501d] {
		grid-template-columns: auto repeat(7, 1fr)
	}
	
	.vc-weeks.vc-show-weeknumbers.is-right[data-v-74ad501d] {
		grid-template-columns: repeat(7, 1fr) auto
	}
	
	.vc-weekday[data-v-74ad501d] {
		text-align: center;
		color: var(--gray-500);
		font-size: var(--text-sm);
		font-weight: var(--font-bold);
		line-height: 14px;
		padding-top: 4px;
		padding-bottom: 8px;
		cursor: default;
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-is-dark .vc-header[data-v-74ad501d] {
		color: var(--gray-200)
	}
	
	.vc-is-dark .vc-title[data-v-74ad501d] {
		color: var(--gray-100)
	}
	
	.vc-is-dark .vc-weekday[data-v-74ad501d] {
		color: var(--accent-200)
	}
	</style>
	<style type="text/css">
	.vc-nav-popover-container {
		color: var(--white);
		font-size: var(--text-sm);
		font-weight: var(--font-semibold);
		background-color: var(--gray-800);
		border: 1px solid;
		border-color: var(--gray-700);
		border-radius: var(--rounded-lg);
		padding: 4px;
		box-shadow: var(--shadow)
	}
	
	.vc-is-dark .vc-nav-popover-container {
		color: var(--gray-800);
		background-color: var(--white);
		border-color: var(--gray-100)
	}
	</style>
	<style type="text/css">
	.none-enter-active[data-v-5be4b00c],
	.none-leave-active[data-v-5be4b00c] {
		transition-duration: 0s
	}
	
	.fade-enter-active[data-v-5be4b00c],
	.fade-leave-active[data-v-5be4b00c],
	.slide-down-enter-active[data-v-5be4b00c],
	.slide-down-leave-active[data-v-5be4b00c],
	.slide-left-enter-active[data-v-5be4b00c],
	.slide-left-leave-active[data-v-5be4b00c],
	.slide-right-enter-active[data-v-5be4b00c],
	.slide-right-leave-active[data-v-5be4b00c],
	.slide-up-enter-active[data-v-5be4b00c],
	.slide-up-leave-active[data-v-5be4b00c] {
		transition: transform var(--slide-duration) var(--slide-timing), opacity var(--slide-duration) var(--slide-timing);
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden
	}
	
	.fade-leave-active[data-v-5be4b00c],
	.none-leave-active[data-v-5be4b00c],
	.slide-down-leave-active[data-v-5be4b00c],
	.slide-left-leave-active[data-v-5be4b00c],
	.slide-right-leave-active[data-v-5be4b00c],
	.slide-up-leave-active[data-v-5be4b00c] {
		position: absolute;
		width: 100%
	}
	
	.fade-enter[data-v-5be4b00c],
	.fade-leave-to[data-v-5be4b00c],
	.none-enter[data-v-5be4b00c],
	.none-leave-to[data-v-5be4b00c],
	.slide-down-enter[data-v-5be4b00c],
	.slide-down-leave-to[data-v-5be4b00c],
	.slide-left-enter[data-v-5be4b00c],
	.slide-left-leave-to[data-v-5be4b00c],
	.slide-right-enter[data-v-5be4b00c],
	.slide-right-leave-to[data-v-5be4b00c],
	.slide-up-enter[data-v-5be4b00c],
	.slide-up-leave-to[data-v-5be4b00c] {
		opacity: 0
	}
	
	.slide-left-enter[data-v-5be4b00c],
	.slide-right-leave-to[data-v-5be4b00c] {
		transform: translateX(var(--slide-translate))
	}
	
	.slide-left-leave-to[data-v-5be4b00c],
	.slide-right-enter[data-v-5be4b00c] {
		transform: translateX(calc(var(--slide-translate)*-1))
	}
	
	.slide-down-leave-to[data-v-5be4b00c],
	.slide-up-enter[data-v-5be4b00c] {
		transform: translateY(var(--slide-translate))
	}
	
	.slide-down-enter[data-v-5be4b00c],
	.slide-up-leave-to[data-v-5be4b00c] {
		transform: translateY(calc(var(--slide-translate)*-1))
	}
	</style>
	<style type="text/css">
	.vc-container {
		--white: #fff;
		--black: #000;
		--gray-100: #f7fafc;
		--gray-200: #edf2f7;
		--gray-300: #e2e8f0;
		--gray-400: #cbd5e0;
		--gray-500: #a0aec0;
		--gray-600: #718096;
		--gray-700: #4a5568;
		--gray-800: #2d3748;
		--gray-900: #1a202c;
		--red-100: #fff5f5;
		--red-200: #fed7d7;
		--red-300: #feb2b2;
		--red-400: #fc8181;
		--red-500: #f56565;
		--red-600: #e53e3e;
		--red-700: #c53030;
		--red-800: #9b2c2c;
		--red-900: #742a2a;
		--orange-100: #fffaf0;
		--orange-200: #feebc8;
		--orange-300: #fbd38d;
		--orange-400: #f6ad55;
		--orange-500: #ed8936;
		--orange-600: #dd6b20;
		--orange-700: #c05621;
		--orange-800: #9c4221;
		--orange-900: #7b341e;
		--yellow-100: ivory;
		--yellow-200: #fefcbf;
		--yellow-300: #faf089;
		--yellow-400: #f6e05e;
		--yellow-500: #ecc94b;
		--yellow-600: #d69e2e;
		--yellow-700: #b7791f;
		--yellow-800: #975a16;
		--yellow-900: #744210;
		--green-100: #f0fff4;
		--green-200: #c6f6d5;
		--green-300: #9ae6b4;
		--green-400: #68d391;
		--green-500: #48bb78;
		--green-600: #38a169;
		--green-700: #2f855a;
		--green-800: #276749;
		--green-900: #22543d;
		--teal-100: #e6fffa;
		--teal-200: #b2f5ea;
		--teal-300: #81e6d9;
		--teal-400: #4fd1c5;
		--teal-500: #38b2ac;
		--teal-600: #319795;
		--teal-700: #2c7a7b;
		--teal-800: #285e61;
		--teal-900: #234e52;
		--blue-100: #ebf8ff;
		--blue-200: #bee3f8;
		--blue-300: #90cdf4;
		--blue-400: #63b3ed;
		--blue-500: #4299e1;
		--blue-600: #3182ce;
		--blue-700: #2b6cb0;
		--blue-800: #2c5282;
		--blue-900: #2a4365;
		--indigo-100: #ebf4ff;
		--indigo-200: #c3dafe;
		--indigo-300: #a3bffa;
		--indigo-400: #7f9cf5;
		--indigo-500: #667eea;
		--indigo-600: #5a67d8;
		--indigo-700: #4c51bf;
		--indigo-800: #434190;
		--indigo-900: #3c366b;
		--purple-100: #faf5ff;
		--purple-200: #e9d8fd;
		--purple-300: #d6bcfa;
		--purple-400: #b794f4;
		--purple-500: #9f7aea;
		--purple-600: #805ad5;
		--purple-700: #6b46c1;
		--purple-800: #553c9a;
		--purple-900: #44337a;
		--pink-100: #fff5f7;
		--pink-200: #fed7e2;
		--pink-300: #fbb6ce;
		--pink-400: #f687b3;
		--pink-500: #ed64a6;
		--pink-600: #d53f8c;
		--pink-700: #b83280;
		--pink-800: #97266d;
		--pink-900: #702459
	}
	
	.vc-container.vc-red {
		--accent-100: var(--red-100);
		--accent-200: var(--red-200);
		--accent-300: var(--red-300);
		--accent-400: var(--red-400);
		--accent-500: var(--red-500);
		--accent-600: var(--red-600);
		--accent-700: var(--red-700);
		--accent-800: var(--red-800);
		--accent-900: var(--red-900)
	}
	
	.vc-container.vc-orange {
		--accent-100: var(--orange-100);
		--accent-200: var(--orange-200);
		--accent-300: var(--orange-300);
		--accent-400: var(--orange-400);
		--accent-500: var(--orange-500);
		--accent-600: var(--orange-600);
		--accent-700: var(--orange-700);
		--accent-800: var(--orange-800);
		--accent-900: var(--orange-900)
	}
	
	.vc-container.vc-yellow {
		--accent-100: var(--yellow-100);
		--accent-200: var(--yellow-200);
		--accent-300: var(--yellow-300);
		--accent-400: var(--yellow-400);
		--accent-500: var(--yellow-500);
		--accent-600: var(--yellow-600);
		--accent-700: var(--yellow-700);
		--accent-800: var(--yellow-800);
		--accent-900: var(--yellow-900)
	}
	
	.vc-container.vc-green {
		--accent-100: var(--green-100);
		--accent-200: var(--green-200);
		--accent-300: var(--green-300);
		--accent-400: var(--green-400);
		--accent-500: var(--green-500);
		--accent-600: var(--green-600);
		--accent-700: var(--green-700);
		--accent-800: var(--green-800);
		--accent-900: var(--green-900)
	}
	
	.vc-container.vc-teal {
		--accent-100: var(--teal-100);
		--accent-200: var(--teal-200);
		--accent-300: var(--teal-300);
		--accent-400: var(--teal-400);
		--accent-500: var(--teal-500);
		--accent-600: var(--teal-600);
		--accent-700: var(--teal-700);
		--accent-800: var(--teal-800);
		--accent-900: var(--teal-900)
	}
	
	.vc-container.vc-blue {
		--accent-100: var(--blue-100);
		--accent-200: var(--blue-200);
		--accent-300: var(--blue-300);
		--accent-400: var(--blue-400);
		--accent-500: var(--blue-500);
		--accent-600: var(--blue-600);
		--accent-700: var(--blue-700);
		--accent-800: var(--blue-800);
		--accent-900: var(--blue-900)
	}
	
	.vc-container.vc-indigo {
		--accent-100: var(--indigo-100);
		--accent-200: var(--indigo-200);
		--accent-300: var(--indigo-300);
		--accent-400: var(--indigo-400);
		--accent-500: var(--indigo-500);
		--accent-600: var(--indigo-600);
		--accent-700: var(--indigo-700);
		--accent-800: var(--indigo-800);
		--accent-900: var(--indigo-900)
	}
	
	.vc-container.vc-purple {
		--accent-100: var(--purple-100);
		--accent-200: var(--purple-200);
		--accent-300: var(--purple-300);
		--accent-400: var(--purple-400);
		--accent-500: var(--purple-500);
		--accent-600: var(--purple-600);
		--accent-700: var(--purple-700);
		--accent-800: var(--purple-800);
		--accent-900: var(--purple-900)
	}
	
	.vc-container.vc-pink {
		--accent-100: var(--pink-100);
		--accent-200: var(--pink-200);
		--accent-300: var(--pink-300);
		--accent-400: var(--pink-400);
		--accent-500: var(--pink-500);
		--accent-600: var(--pink-600);
		--accent-700: var(--pink-700);
		--accent-800: var(--pink-800);
		--accent-900: var(--pink-900)
	}
	
	.vc-container {
		--font-normal: 400;
		--font-medium: 500;
		--font-semibold: 600;
		--font-bold: 700;
		--text-xs: 12px;
		--text-sm: 14px;
		--text-base: 16px;
		--text-lg: 18px;
		--leading-snug: 1.375;
		--rounded: 0.25rem;
		--rounded-lg: 0.5rem;
		--rounded-full: 9999px;
		--shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
		--shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		--shadow-inner: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
		--slide-translate: 22px;
		--slide-duration: 0.15s;
		--slide-timing: ease;
		--day-content-transition-time: 0.13s ease-in;
		--weeknumber-offset: -34px;
		position: relative;
		display: inline-flex;
		width: max-content;
		height: max-content;
		font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
		color: var(--gray-900);
		background-color: var(--white);
		border: 1px solid;
		border-color: var(--gray-400);
		border-radius: var(--rounded-lg);
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		-webkit-tap-highlight-color: transparent
	}
	
	.vc-container,
	.vc-container * {
		box-sizing: border-box
	}
	
	.vc-container:focus,
	.vc-container:focus {
		outline: none
	}
	
	.vc-container [role=button],
	.vc-container button {
		cursor: pointer
	}
	
	.vc-container.vc-is-expanded {
		min-width: 100%
	}
	
	.vc-container .vc-container {
		border: none
	}
	
	.vc-container.vc-is-dark {
		color: var(--gray-100);
		background-color: var(--gray-900);
		border-color: var(--gray-700)
	}
	</style>
	<style type="text/css">
	.vc-pane-container {
		width: 100%;
		position: relative
	}
	
	.vc-pane-container.in-transition {
		overflow: hidden
	}
	
	.vc-pane-layout {
		display: grid
	}
	
	.vc-arrow {
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		pointer-events: auto;
		color: var(--gray-600);
		border-width: 2px;
		border-style: solid;
		border-radius: var(--rounded);
		border-color: transparent
	}
	
	.vc-arrow:hover {
		background: var(--gray-200)
	}
	
	.vc-arrow:focus {
		border-color: var(--gray-300)
	}
	
	.vc-arrow.is-disabled {
		opacity: .25;
		pointer-events: none;
		cursor: not-allowed
	}
	
	.vc-day-popover-container {
		color: var(--white);
		background-color: var(--gray-800);
		border: 1px solid;
		border-color: var(--gray-700);
		border-radius: var(--rounded);
		font-size: var(--text-xs);
		font-weight: var(--font-medium);
		padding: 4px 8px;
		box-shadow: var(--shadow)
	}
	
	.vc-day-popover-header {
		font-size: var(--text-xs);
		color: var(--gray-300);
		font-weight: var(--font-semibold);
		text-align: center
	}
	
	.vc-arrows-container {
		width: 100%;
		position: absolute;
		top: 0;
		display: flex;
		justify-content: space-between;
		padding: 8px 10px;
		pointer-events: none
	}
	
	.vc-arrows-container.title-left {
		justify-content: flex-end
	}
	
	.vc-arrows-container.title-right {
		justify-content: flex-start
	}
	
	.vc-is-dark .vc-arrow {
		color: var(--white)
	}
	
	.vc-is-dark .vc-arrow:hover {
		background: var(--gray-800)
	}
	
	.vc-is-dark .vc-arrow:focus {
		border-color: var(--gray-700)
	}
	
	.vc-is-dark .vc-day-popover-container {
		color: var(--gray-800);
		background-color: var(--white);
		border-color: var(--gray-100)
	}
	
	.vc-is-dark .vc-day-popover-header {
		color: var(--gray-700)
	}
	</style>
	<style type="text/css">
	.vc-popover-content-wrapper[data-v-05016e86] {
		--popover-horizontal-content-offset: 8px;
		--popover-vertical-content-offset: 10px;
		--popover-slide-translation: 15px;
		--popover-transition-time: 0.14s ease-in-out;
		--popover-caret-horizontal-offset: 18px;
		--popover-caret-vertical-offset: 8px;
		position: absolute;
		display: block;
		outline: none;
		z-index: 10
	}
	
	.vc-popover-content-wrapper[data-v-05016e86]:not(.is-interactive) {
		pointer-events: none
	}
	
	.vc-popover-content[data-v-05016e86] {
		position: relative;
		outline: none;
		z-index: 10;
		box-shadow: var(--shadow-lg)
	}
	
	.vc-popover-content.direction-bottom[data-v-05016e86] {
		margin-top: var(--popover-vertical-content-offset)
	}
	
	.vc-popover-content.direction-top[data-v-05016e86] {
		margin-bottom: var(--popover-vertical-content-offset)
	}
	
	.vc-popover-content.direction-left[data-v-05016e86] {
		margin-right: var(--popover-horizontal-content-offset)
	}
	
	.vc-popover-content.direction-right[data-v-05016e86] {
		margin-left: var(--popover-horizontal-content-offset)
	}
	
	.vc-popover-caret[data-v-05016e86] {
		content: "";
		position: absolute;
		display: block;
		width: 12px;
		height: 12px;
		border-top: inherit;
		border-left: inherit;
		background-color: inherit;
		-webkit-user-select: none;
		user-select: none;
		z-index: -1
	}
	
	.vc-popover-caret.direction-bottom[data-v-05016e86] {
		top: 0
	}
	
	.vc-popover-caret.direction-bottom.align-left[data-v-05016e86] {
		transform: translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-bottom.align-center[data-v-05016e86] {
		transform: translateX(-50%) translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-bottom.align-right[data-v-05016e86] {
		transform: translateY(-50%) rotate(45deg)
	}
	
	.vc-popover-caret.direction-top[data-v-05016e86] {
		top: 100%
	}
	
	.vc-popover-caret.direction-top.align-left[data-v-05016e86] {
		transform: translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-top.align-center[data-v-05016e86] {
		transform: translateX(-50%) translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-top.align-right[data-v-05016e86] {
		transform: translateY(-50%) rotate(-135deg)
	}
	
	.vc-popover-caret.direction-left[data-v-05016e86] {
		left: 100%
	}
	
	.vc-popover-caret.direction-left.align-top[data-v-05016e86] {
		transform: translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-left.align-middle[data-v-05016e86] {
		transform: translateY(-50%) translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-left.align-bottom[data-v-05016e86] {
		transform: translateX(-50%) rotate(135deg)
	}
	
	.vc-popover-caret.direction-right[data-v-05016e86] {
		left: 0
	}
	
	.vc-popover-caret.direction-right.align-top[data-v-05016e86] {
		transform: translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.direction-right.align-middle[data-v-05016e86] {
		transform: translateY(-50%) translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.direction-right.align-bottom[data-v-05016e86] {
		transform: translateX(-50%) rotate(-45deg)
	}
	
	.vc-popover-caret.align-left[data-v-05016e86] {
		left: var(--popover-caret-horizontal-offset)
	}
	
	.vc-popover-caret.align-center[data-v-05016e86] {
		left: 50%
	}
	
	.vc-popover-caret.align-right[data-v-05016e86] {
		right: var(--popover-caret-horizontal-offset)
	}
	
	.vc-popover-caret.align-top[data-v-05016e86] {
		top: var(--popover-caret-vertical-offset)
	}
	
	.vc-popover-caret.align-middle[data-v-05016e86] {
		top: 50%
	}
	
	.vc-popover-caret.align-bottom[data-v-05016e86] {
		bottom: var(--popover-caret-vertical-offset)
	}
	
	.fade-enter-active[data-v-05016e86],
	.fade-leave-active[data-v-05016e86],
	.slide-fade-enter-active[data-v-05016e86],
	.slide-fade-leave-active[data-v-05016e86] {
		transition: all var(--popover-transition-time);
		pointer-events: none
	}
	
	.fade-enter[data-v-05016e86],
	.fade-leave-to[data-v-05016e86],
	.slide-fade-enter[data-v-05016e86],
	.slide-fade-leave-to[data-v-05016e86] {
		opacity: 0
	}
	
	.slide-fade-enter.direction-bottom[data-v-05016e86],
	.slide-fade-leave-to.direction-bottom[data-v-05016e86] {
		transform: translateY(calc(var(--popover-slide-translation)*-1))
	}
	
	.slide-fade-enter.direction-top[data-v-05016e86],
	.slide-fade-leave-to.direction-top[data-v-05016e86] {
		transform: translateY(var(--popover-slide-translation))
	}
	
	.slide-fade-enter.direction-left[data-v-05016e86],
	.slide-fade-leave-to.direction-left[data-v-05016e86] {
		transform: translateX(var(--popover-slide-translation))
	}
	
	.slide-fade-enter.direction-right[data-v-05016e86],
	.slide-fade-leave-to.direction-right[data-v-05016e86] {
		transform: translateX(calc(var(--popover-slide-translation)*-1))
	}
	</style>
	<style type="text/css">
	.vc-day-popover-row[data-v-eb5afd1a] {
		--day-content-transition-time: 0.13s ease-in;
		display: flex;
		align-items: center;
		transition: all var(--day-content-transition-time)
	}
	
	.vc-day-popover-row[data-v-eb5afd1a]:not(:first-child) {
		margin-top: 3px
	}
	
	.vc-day-popover-row-indicator[data-v-eb5afd1a] {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-grow: 0;
		width: 15px;
		margin-right: 3px
	}
	
	.vc-day-popover-row-indicator span[data-v-eb5afd1a] {
		transition: all var(--day-content-transition-time)
	}
	
	.vc-day-popover-row-content[data-v-eb5afd1a] {
		display: flex;
		align-items: center;
		flex-wrap: none;
		flex-grow: 1;
		width: max-content
	}
	</style>
	<style type="text/css">
	.vc-svg-icon[data-v-63f7b5ec] {
		display: inline-block;
		stroke: currentColor;
		stroke-width: 0
	}
	
	.vc-svg-icon path[data-v-63f7b5ec] {
		fill: currentColor
	}
	</style>
	<style type="text/css">
	.vc-nav-header {
		display: flex;
		justify-content: space-between
	}
	
	.vc-nav-arrow {
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		line-height: var(--leading-snug);
		border-width: 2px;
		border-style: solid;
		border-color: transparent;
		border-radius: var(--rounded)
	}
	
	.vc-nav-arrow.is-left {
		margin-right: auto
	}
	
	.vc-nav-arrow.is-right {
		margin-left: auto
	}
	
	.vc-nav-arrow.is-disabled {
		opacity: .25;
		pointer-events: none;
		cursor: not-allowed
	}
	
	.vc-nav-arrow:hover {
		background-color: var(--gray-900)
	}
	
	.vc-nav-arrow:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-title {
		color: var(--accent-100);
		font-weight: var(--font-bold);
		line-height: var(--leading-snug);
		padding: 4px 8px;
		border-radius: var(--rounded);
		border-width: 2px;
		border-style: solid;
		border-color: transparent;
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-nav-title:hover {
		background-color: var(--gray-900)
	}
	
	.vc-nav-title:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-items {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		grid-row-gap: 2px;
		grid-column-gap: 5px
	}
	
	.vc-nav-item {
		width: 48px;
		text-align: center;
		line-height: var(--leading-snug);
		font-weight: var(--font-semibold);
		padding: 4px 0;
		cursor: pointer;
		border-color: transparent;
		border-width: 2px;
		border-style: solid;
		border-radius: var(--rounded);
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-nav-item:hover {
		color: var(--white);
		background-color: var(--gray-900);
		box-shadow: var(--shadow-inner)
	}
	
	.vc-nav-item.is-active {
		color: var(--accent-900);
		background: var(--accent-100);
		font-weight: var(--font-bold);
		box-shadow: var(--shadow)
	}
	
	.vc-nav-item.is-current {
		color: var(--accent-100);
		font-weight: var(--bold);
		border-color: var(--accent-100)
	}
	
	.vc-nav-item:focus {
		border-color: var(--accent-600)
	}
	
	.vc-nav-item.is-disabled {
		opacity: .25;
		pointer-events: none
	}
	
	.vc-is-dark .vc-nav-title {
		color: var(--gray-900)
	}
	
	.vc-is-dark .vc-nav-title:hover {
		background-color: var(--gray-200)
	}
	
	.vc-is-dark .vc-nav-title:focus {
		border-color: var(--accent-400)
	}
	
	.vc-is-dark .vc-nav-arrow:hover {
		background-color: var(--gray-200)
	}
	
	.vc-is-dark .vc-nav-arrow:focus {
		border-color: var(--accent-400)
	}
	
	.vc-is-dark .vc-nav-item:hover {
		color: var(--gray-900);
		background-color: var(--gray-200);
		box-shadow: none
	}
	
	.vc-is-dark .vc-nav-item.is-active {
		color: var(--white);
		background: var(--accent-500)
	}
	
	.vc-is-dark .vc-nav-item.is-current {
		color: var(--accent-600);
		border-color: var(--accent-500)
	}
	
	.vc-is-dark .vc-nav-item:focus {
		border-color: var(--accent-400)
	}
	</style>
	<style type="text/css">
	.vc-day[data-v-4420d078] {
		position: relative;
		min-height: 32px;
		z-index: 1
	}
	
	.vc-day.is-not-in-month *[data-v-4420d078] {
		opacity: 0;
		pointer-events: none
	}
	
	.vc-day-layer[data-v-4420d078] {
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		pointer-events: none
	}
	
	.vc-day-box-center-center[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center;
		transform-origin: 50% 50%
	}
	
	.vc-day-box-left-center[data-v-4420d078] {
		display: flex;
		justify-content: flex-start;
		align-items: center;
		transform-origin: 0 50%
	}
	
	.vc-day-box-right-center[data-v-4420d078] {
		display: flex;
		justify-content: flex-end;
		align-items: center;
		transform-origin: 100% 50%
	}
	
	.vc-day-box-center-bottom[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: flex-end
	}
	
	.vc-day-content[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: var(--text-sm);
		font-weight: var(--font-medium);
		width: 28px;
		height: 28px;
		line-height: 28px;
		border-radius: var(--rounded-full);
		-webkit-user-select: none;
		user-select: none;
		cursor: pointer
	}
	
	.vc-day-content[data-v-4420d078]:hover {
		background-color: rgba(204, 214, 224, .3)
	}
	
	.vc-day-content[data-v-4420d078]:focus {
		font-weight: var(--font-bold);
		background-color: rgba(204, 214, 224, .4)
	}
	
	.vc-day-content.is-disabled[data-v-4420d078] {
		color: var(--gray-400)
	}
	
	.vc-is-dark .vc-day-content[data-v-4420d078]:hover {
		background-color: rgba(114, 129, 151, .3)
	}
	
	.vc-is-dark .vc-day-content[data-v-4420d078]:focus {
		background-color: rgba(114, 129, 151, .4)
	}
	
	.vc-is-dark .vc-day-content.is-disabled[data-v-4420d078] {
		color: var(--gray-600)
	}
	
	.vc-highlights[data-v-4420d078] {
		overflow: hidden;
		pointer-events: none;
		z-index: -1
	}
	
	.vc-highlight[data-v-4420d078] {
		width: 28px;
		height: 28px
	}
	
	.vc-highlight.vc-highlight-base-start[data-v-4420d078] {
		width: 50%!important;
		border-radius: 0!important;
		border-right-width: 0!important
	}
	
	.vc-highlight.vc-highlight-base-end[data-v-4420d078] {
		width: 50%!important;
		border-radius: 0!important;
		border-left-width: 0!important
	}
	
	.vc-highlight.vc-highlight-base-middle[data-v-4420d078] {
		width: 100%;
		border-radius: 0!important;
		border-left-width: 0!important;
		border-right-width: 0!important;
		margin: 0 -1px
	}
	
	.vc-dots[data-v-4420d078] {
		display: flex;
		justify-content: center;
		align-items: center
	}
	
	.vc-dot[data-v-4420d078] {
		width: 5px;
		height: 5px;
		border-radius: 50%;
		transition: all var(--day-content-transition-time)
	}
	
	.vc-dot[data-v-4420d078]:not(:last-child) {
		margin-right: 3px
	}
	
	.vc-bars[data-v-4420d078] {
		display: flex;
		justify-content: flex-start;
		align-items: center;
		width: 75%
	}
	
	.vc-bar[data-v-4420d078] {
		flex-grow: 1;
		height: 3px;
		transition: all var(--day-content-transition-time)
	}
	</style>
	<style type="text/css">
	.vc-pane[data-v-74ad501d] {
		min-width: 250px
	}
	
	.vc-header[data-v-74ad501d] {
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 10px 18px 0 18px
	}
	
	.vc-header.align-left[data-v-74ad501d] {
		justify-content: flex-start
	}
	
	.vc-header.align-right[data-v-74ad501d] {
		justify-content: flex-end
	}
	
	.vc-title[data-v-74ad501d] {
		font-size: var(--text-lg);
		color: var(--gray-800);
		font-weight: var(--font-semibold);
		line-height: 28px;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		white-space: nowrap
	}
	
	.vc-title[data-v-74ad501d]:hover {
		opacity: .75
	}
	
	.vc-weeknumber[data-v-74ad501d] {
		position: relative
	}
	
	.vc-weeknumber[data-v-74ad501d],
	.vc-weeknumber-content[data-v-74ad501d] {
		display: flex;
		justify-content: center;
		align-items: center
	}
	
	.vc-weeknumber-content[data-v-74ad501d] {
		font-size: var(--text-xs);
		font-weight: var(--font-medium);
		font-style: italic;
		width: 28px;
		height: 28px;
		margin-top: 2px;
		color: var(--gray-500);
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-weeknumber-content.is-left-outside[data-v-74ad501d] {
		position: absolute;
		left: var(--weeknumber-offset)
	}
	
	.vc-weeknumber-content.is-right-outside[data-v-74ad501d] {
		position: absolute;
		right: var(--weeknumber-offset)
	}
	
	.vc-weeks[data-v-74ad501d] {
		display: grid;
		grid-template-columns: repeat(7, 1fr);
		position: relative;
		-webkit-overflow-scrolling: touch;
		padding: 5px;
		min-width: 250px
	}
	
	.vc-weeks.vc-show-weeknumbers[data-v-74ad501d] {
		grid-template-columns: auto repeat(7, 1fr)
	}
	
	.vc-weeks.vc-show-weeknumbers.is-right[data-v-74ad501d] {
		grid-template-columns: repeat(7, 1fr) auto
	}
	
	.vc-weekday[data-v-74ad501d] {
		text-align: center;
		color: var(--gray-500);
		font-size: var(--text-sm);
		font-weight: var(--font-bold);
		line-height: 14px;
		padding-top: 4px;
		padding-bottom: 8px;
		cursor: default;
		-webkit-user-select: none;
		user-select: none
	}
	
	.vc-is-dark .vc-header[data-v-74ad501d] {
		color: var(--gray-200)
	}
	
	.vc-is-dark .vc-title[data-v-74ad501d] {
		color: var(--gray-100)
	}
	
	.vc-is-dark .vc-weekday[data-v-74ad501d] {
		color: var(--accent-200)
	}
	</style>
	<style type="text/css">
	.vc-nav-popover-container {
		color: var(--white);
		font-size: var(--text-sm);
		font-weight: var(--font-semibold);
		background-color: var(--gray-800);
		border: 1px solid;
		border-color: var(--gray-700);
		border-radius: var(--rounded-lg);
		padding: 4px;
		box-shadow: var(--shadow)
	}
	
	.vc-is-dark .vc-nav-popover-container {
		color: var(--gray-800);
		background-color: var(--white);
		border-color: var(--gray-100)
	}
	</style>
	<style type="text/css">
	.none-enter-active[data-v-5be4b00c],
	.none-leave-active[data-v-5be4b00c] {
		transition-duration: 0s
	}
	
	.fade-enter-active[data-v-5be4b00c],
	.fade-leave-active[data-v-5be4b00c],
	.slide-down-enter-active[data-v-5be4b00c],
	.slide-down-leave-active[data-v-5be4b00c],
	.slide-left-enter-active[data-v-5be4b00c],
	.slide-left-leave-active[data-v-5be4b00c],
	.slide-right-enter-active[data-v-5be4b00c],
	.slide-right-leave-active[data-v-5be4b00c],
	.slide-up-enter-active[data-v-5be4b00c],
	.slide-up-leave-active[data-v-5be4b00c] {
		transition: transform var(--slide-duration) var(--slide-timing), opacity var(--slide-duration) var(--slide-timing);
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden
	}
	
	.fade-leave-active[data-v-5be4b00c],
	.none-leave-active[data-v-5be4b00c],
	.slide-down-leave-active[data-v-5be4b00c],
	.slide-left-leave-active[data-v-5be4b00c],
	.slide-right-leave-active[data-v-5be4b00c],
	.slide-up-leave-active[data-v-5be4b00c] {
		position: absolute;
		width: 100%
	}
	
	.fade-enter[data-v-5be4b00c],
	.fade-leave-to[data-v-5be4b00c],
	.none-enter[data-v-5be4b00c],
	.none-leave-to[data-v-5be4b00c],
	.slide-down-enter[data-v-5be4b00c],
	.slide-down-leave-to[data-v-5be4b00c],
	.slide-left-enter[data-v-5be4b00c],
	.slide-left-leave-to[data-v-5be4b00c],
	.slide-right-enter[data-v-5be4b00c],
	.slide-right-leave-to[data-v-5be4b00c],
	.slide-up-enter[data-v-5be4b00c],
	.slide-up-leave-to[data-v-5be4b00c] {
		opacity: 0
	}
	
	.slide-left-enter[data-v-5be4b00c],
	.slide-right-leave-to[data-v-5be4b00c] {
		transform: translateX(var(--slide-translate))
	}
	
	.slide-left-leave-to[data-v-5be4b00c],
	.slide-right-enter[data-v-5be4b00c] {
		transform: translateX(calc(var(--slide-translate)*-1))
	}
	
	.slide-down-leave-to[data-v-5be4b00c],
	.slide-up-enter[data-v-5be4b00c] {
		transform: translateY(var(--slide-translate))
	}
	
	.slide-down-enter[data-v-5be4b00c],
	.slide-up-leave-to[data-v-5be4b00c] {
		transform: translateY(calc(var(--slide-translate)*-1))
	}
	</style>
	<style type="text/css">
	.vc-container {
		--white: #fff;
		--black: #000;
		--gray-100: #f7fafc;
		--gray-200: #edf2f7;
		--gray-300: #e2e8f0;
		--gray-400: #cbd5e0;
		--gray-500: #a0aec0;
		--gray-600: #718096;
		--gray-700: #4a5568;
		--gray-800: #2d3748;
		--gray-900: #1a202c;
		--red-100: #fff5f5;
		--red-200: #fed7d7;
		--red-300: #feb2b2;
		--red-400: #fc8181;
		--red-500: #f56565;
		--red-600: #e53e3e;
		--red-700: #c53030;
		--red-800: #9b2c2c;
		--red-900: #742a2a;
		--orange-100: #fffaf0;
		--orange-200: #feebc8;
		--orange-300: #fbd38d;
		--orange-400: #f6ad55;
		--orange-500: #ed8936;
		--orange-600: #dd6b20;
		--orange-700: #c05621;
		--orange-800: #9c4221;
		--orange-900: #7b341e;
		--yellow-100: ivory;
		--yellow-200: #fefcbf;
		--yellow-300: #faf089;
		--yellow-400: #f6e05e;
		--yellow-500: #ecc94b;
		--yellow-600: #d69e2e;
		--yellow-700: #b7791f;
		--yellow-800: #975a16;
		--yellow-900: #744210;
		--green-100: #f0fff4;
		--green-200: #c6f6d5;
		--green-300: #9ae6b4;
		--green-400: #68d391;
		--green-500: #48bb78;
		--green-600: #38a169;
		--green-700: #2f855a;
		--green-800: #276749;
		--green-900: #22543d;
		--teal-100: #e6fffa;
		--teal-200: #b2f5ea;
		--teal-300: #81e6d9;
		--teal-400: #4fd1c5;
		--teal-500: #38b2ac;
		--teal-600: #319795;
		--teal-700: #2c7a7b;
		--teal-800: #285e61;
		--teal-900: #234e52;
		--blue-100: #ebf8ff;
		--blue-200: #bee3f8;
		--blue-300: #90cdf4;
		--blue-400: #63b3ed;
		--blue-500: #4299e1;
		--blue-600: #3182ce;
		--blue-700: #2b6cb0;
		--blue-800: #2c5282;
		--blue-900: #2a4365;
		--indigo-100: #ebf4ff;
		--indigo-200: #c3dafe;
		--indigo-300: #a3bffa;
		--indigo-400: #7f9cf5;
		--indigo-500: #667eea;
		--indigo-600: #5a67d8;
		--indigo-700: #4c51bf;
		--indigo-800: #434190;
		--indigo-900: #3c366b;
		--purple-100: #faf5ff;
		--purple-200: #e9d8fd;
		--purple-300: #d6bcfa;
		--purple-400: #b794f4;
		--purple-500: #9f7aea;
		--purple-600: #805ad5;
		--purple-700: #6b46c1;
		--purple-800: #553c9a;
		--purple-900: #44337a;
		--pink-100: #fff5f7;
		--pink-200: #fed7e2;
		--pink-300: #fbb6ce;
		--pink-400: #f687b3;
		--pink-500: #ed64a6;
		--pink-600: #d53f8c;
		--pink-700: #b83280;
		--pink-800: #97266d;
		--pink-900: #702459
	}
	
	.vc-container.vc-red {
		--accent-100: var(--red-100);
		--accent-200: var(--red-200);
		--accent-300: var(--red-300);
		--accent-400: var(--red-400);
		--accent-500: var(--red-500);
		--accent-600: var(--red-600);
		--accent-700: var(--red-700);
		--accent-800: var(--red-800);
		--accent-900: var(--red-900)
	}
	
	.vc-container.vc-orange {
		--accent-100: var(--orange-100);
		--accent-200: var(--orange-200);
		--accent-300: var(--orange-300);
		--accent-400: var(--orange-400);
		--accent-500: var(--orange-500);
		--accent-600: var(--orange-600);
		--accent-700: var(--orange-700);
		--accent-800: var(--orange-800);
		--accent-900: var(--orange-900)
	}
	
	.vc-container.vc-yellow {
		--accent-100: var(--yellow-100);
		--accent-200: var(--yellow-200);
		--accent-300: var(--yellow-300);
		--accent-400: var(--yellow-400);
		--accent-500: var(--yellow-500);
		--accent-600: var(--yellow-600);
		--accent-700: var(--yellow-700);
		--accent-800: var(--yellow-800);
		--accent-900: var(--yellow-900)
	}
	
	.vc-container.vc-green {
		--accent-100: var(--green-100);
		--accent-200: var(--green-200);
		--accent-300: var(--green-300);
		--accent-400: var(--green-400);
		--accent-500: var(--green-500);
		--accent-600: var(--green-600);
		--accent-700: var(--green-700);
		--accent-800: var(--green-800);
		--accent-900: var(--green-900)
	}
	
	.vc-container.vc-teal {
		--accent-100: var(--teal-100);
		--accent-200: var(--teal-200);
		--accent-300: var(--teal-300);
		--accent-400: var(--teal-400);
		--accent-500: var(--teal-500);
		--accent-600: var(--teal-600);
		--accent-700: var(--teal-700);
		--accent-800: var(--teal-800);
		--accent-900: var(--teal-900)
	}
	
	.vc-container.vc-blue {
		--accent-100: var(--blue-100);
		--accent-200: var(--blue-200);
		--accent-300: var(--blue-300);
		--accent-400: var(--blue-400);
		--accent-500: var(--blue-500);
		--accent-600: var(--blue-600);
		--accent-700: var(--blue-700);
		--accent-800: var(--blue-800);
		--accent-900: var(--blue-900)
	}
	
	.vc-container.vc-indigo {
		--accent-100: var(--indigo-100);
		--accent-200: var(--indigo-200);
		--accent-300: var(--indigo-300);
		--accent-400: var(--indigo-400);
		--accent-500: var(--indigo-500);
		--accent-600: var(--indigo-600);
		--accent-700: var(--indigo-700);
		--accent-800: var(--indigo-800);
		--accent-900: var(--indigo-900)
	}
	
	.vc-container.vc-purple {
		--accent-100: var(--purple-100);
		--accent-200: var(--purple-200);
		--accent-300: var(--purple-300);
		--accent-400: var(--purple-400);
		--accent-500: var(--purple-500);
		--accent-600: var(--purple-600);
		--accent-700: var(--purple-700);
		--accent-800: var(--purple-800);
		--accent-900: var(--purple-900)
	}
	
	.vc-container.vc-pink {
		--accent-100: var(--pink-100);
		--accent-200: var(--pink-200);
		--accent-300: var(--pink-300);
		--accent-400: var(--pink-400);
		--accent-500: var(--pink-500);
		--accent-600: var(--pink-600);
		--accent-700: var(--pink-700);
		--accent-800: var(--pink-800);
		--accent-900: var(--pink-900)
	}
	
	.vc-container {
		--font-normal: 400;
		--font-medium: 500;
		--font-semibold: 600;
		--font-bold: 700;
		--text-xs: 12px;
		--text-sm: 14px;
		--text-base: 16px;
		--text-lg: 18px;
		--leading-snug: 1.375;
		--rounded: 0.25rem;
		--rounded-lg: 0.5rem;
		--rounded-full: 9999px;
		--shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
		--shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		--shadow-inner: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
		--slide-translate: 22px;
		--slide-duration: 0.15s;
		--slide-timing: ease;
		--day-content-transition-time: 0.13s ease-in;
		--weeknumber-offset: -34px;
		position: relative;
		display: inline-flex;
		width: max-content;
		height: max-content;
		font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
		color: var(--gray-900);
		background-color: var(--white);
		border: 1px solid;
		border-color: var(--gray-400);
		border-radius: var(--rounded-lg);
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		-webkit-tap-highlight-color: transparent
	}
	
	.vc-container,
	.vc-container * {
		box-sizing: border-box
	}
	
	.vc-container:focus,
	.vc-container:focus {
		outline: none
	}
	
	.vc-container [role=button],
	.vc-container button {
		cursor: pointer
	}
	
	.vc-container.vc-is-expanded {
		min-width: 100%
	}
	
	.vc-container .vc-container {
		border: none
	}
	
	.vc-container.vc-is-dark {
		color: var(--gray-100);
		background-color: var(--gray-900);
		border-color: var(--gray-700)
	}
	</style>
	<style type="text/css">
	.vc-pane-container {
		width: 100%;
		position: relative
	}
	
	.vc-pane-container.in-transition {
		overflow: hidden
	}
	
	.vc-pane-layout {
		display: grid
	}
	
	.vc-arrow {
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		-webkit-user-select: none;
		user-select: none;
		pointer-events: auto;
		color: var(--gray-600);
		border-width: 2px;
		border-style: solid;
		border-radius: var(--rounded);
		border-color: transparent
	}
	
	.vc-arrow:hover {
		background: var(--gray-200)
	}
	
	.vc-arrow:focus {
		border-color: var(--gray-300)
	}
	
	.vc-arrow.is-disabled {
		opacity: .25;
		pointer-events: none;
		cursor: not-allowed
	}
	
	.vc-day-popover-container {
		color: var(--white);
		background-color: var(--gray-800);
		border: 1px solid;
		border-color: var(--gray-700);
		border-radius: var(--rounded);
		font-size: var(--text-xs);
		font-weight: var(--font-medium);
		padding: 4px 8px;
		box-shadow: var(--shadow)
	}
	
	.vc-day-popover-header {
		font-size: var(--text-xs);
		color: var(--gray-300);
		font-weight: var(--font-semibold);
		text-align: center
	}
	
	.vc-arrows-container {
		width: 100%;
		position: absolute;
		top: 0;
		display: flex;
		justify-content: space-between;
		padding: 8px 10px;
		pointer-events: none
	}
	
	.vc-arrows-container.title-left {
		justify-content: flex-end
	}
	
	.vc-arrows-container.title-right {
		justify-content: flex-start
	}
	
	.vc-is-dark .vc-arrow {
		color: var(--white)
	}
	
	.vc-is-dark .vc-arrow:hover {
		background: var(--gray-800)
	}
	
	.vc-is-dark .vc-arrow:focus {
		border-color: var(--gray-700)
	}
	
	.vc-is-dark .vc-day-popover-container {
		color: var(--gray-800);
		background-color: var(--white);
		border-color: var(--gray-100)
	}
	
	.vc-is-dark .vc-day-popover-header {
		color: var(--gray-700)
	}
	</style>
	<style type="text/css">
	.vc-select[data-v-14bdabaf] {
		position: relative
	}
	
	.vc-select select[data-v-14bdabaf] {
		flex-grow: 1;
		display: block;
		-webkit-appearance: none;
		appearance: none;
		width: 52px;
		height: 30px;
		font-size: var(--text-base);
		font-weight: var(--font-medium);
		text-align: left;
		background-color: var(--gray-200);
		border: 2px solid;
		border-color: var(--gray-200);
		color: var(--gray-900);
		padding: 0 20px 0 8px;
		border-radius: var(--rounded);
		line-height: var(--leading-tight);
		text-indent: 0;
		cursor: pointer;
		-moz-padding-start: 3px
	}
	
	.vc-select select[data-v-14bdabaf]:hover {
		color: var(--gray-600)
	}
	
	.vc-select select[data-v-14bdabaf]:focus {
		outline: 0;
		border-color: var(--accent-400);
		background-color: var(--white)
	}
	
	.vc-select-arrow[data-v-14bdabaf] {
		display: flex;
		align-items: center;
		pointer-events: none;
		position: absolute;
		top: 0;
		bottom: 0;
		right: 0;
		padding: 0 4px 0 0;
		color: var(--gray-500)
	}
	
	.vc-select-arrow svg[data-v-14bdabaf] {
		width: 16px;
		height: 16px;
		fill: currentColor
	}
	
	.vc-is-dark select[data-v-14bdabaf] {
		background: var(--gray-700);
		color: var(--gray-100);
		border-color: var(--gray-700)
	}
	
	.vc-is-dark select[data-v-14bdabaf]:hover {
		color: var(--gray-400)
	}
	
	.vc-is-dark select[data-v-14bdabaf]:focus {
		border-color: var(--accent-500);
		background-color: var(--gray-800)
	}
	</style>
	<style type="text/css">
	.vc-time-picker[data-v-021f332c] {
		display: flex;
		align-items: center;
		padding: 8px
	}
	
	.vc-time-picker.vc-invalid[data-v-021f332c] {
		pointer-events: none;
		opacity: .5
	}
	
	.vc-time-picker.vc-bordered[data-v-021f332c] {
		border-top: 1px solid var(--gray-400)
	}
	
	.vc-date-time[data-v-021f332c] {
		margin-left: 8px
	}
	
	.vc-disabled[data-v-021f332c] {
		pointer-events: none;
		opacity: .5
	}
	
	.vc-time-icon[data-v-021f332c] {
		width: 16px;
		height: 16px;
		color: var(--gray-600)
	}
	
	.vc-date[data-v-021f332c] {
		display: flex;
		align-items: center;
		font-size: var(--text-sm);
		font-weight: var(--font-semibold);
		text-transform: uppercase;
		padding: 0 0 4px 4px;
		margin-top: -4px
	}
	
	.vc-date .vc-weekday[data-v-021f332c] {
		color: var(--gray-700);
		letter-spacing: var(--tracking-wide)
	}
	
	.vc-date .vc-month[data-v-021f332c] {
		color: var(--accent-600);
		margin-left: 8px
	}
	
	.vc-date .vc-day[data-v-021f332c] {
		color: var(--accent-600);
		margin-left: 4px
	}
	
	.vc-date .vc-year[data-v-021f332c] {
		color: var(--gray-500);
		margin-left: 8px
	}
	
	.vc-am-pm[data-v-021f332c],
	.vc-time[data-v-021f332c] {
		display: flex;
		align-items: center
	}
	
	.vc-am-pm[data-v-021f332c] {
		background: var(--gray-200);
		margin-left: 8px;
		padding: 4px;
		border-radius: var(--rounded);
		height: 30px
	}
	
	.vc-am-pm button[data-v-021f332c] {
		color: var(--gray-900);
		font-size: var(--text-sm);
		font-weight: var(--font-medium);
		padding: 0 4px;
		background: transparent;
		border: 2px solid transparent;
		border-radius: var(--rounded);
		line-height: var(--leading-snug)
	}
	
	.vc-am-pm button[data-v-021f332c]:hover {
		color: var(--gray-600)
	}
	
	.vc-am-pm button[data-v-021f332c]:focus {
		border-color: var(--accent-400)
	}
	
	.vc-am-pm button.active[data-v-021f332c] {
		background: var(--accent-600);
		color: var(--white)
	}
	
	.vc-am-pm button.active[data-v-021f332c]:hover {
		background: var(--accent-500)
	}
	
	.vc-am-pm button.active[data-v-021f332c]:focus {
		border-color: var(--accent-400)
	}
	
	.vc-is-dark .vc-time-picker[data-v-021f332c] {
		border-color: var(--gray-700)
	}
	
	.vc-is-dark .vc-time-icon[data-v-021f332c],
	.vc-is-dark .vc-weekday[data-v-021f332c] {
		color: var(--gray-400)
	}
	
	.vc-is-dark .vc-day[data-v-021f332c],
	.vc-is-dark .vc-month[data-v-021f332c] {
		color: var(--accent-400)
	}
	
	.vc-is-dark .vc-year[data-v-021f332c] {
		color: var(--gray-500)
	}
	
	.vc-is-dark .vc-am-pm[data-v-021f332c] {
		background: var(--gray-700)
	}
	
	.vc-is-dark .vc-am-pm[data-v-021f332c]:focus {
		border-color: var(--accent-500)
	}
	
	.vc-is-dark .vc-am-pm button[data-v-021f332c] {
		color: var(--gray-100)
	}
	
	.vc-is-dark .vc-am-pm button[data-v-021f332c]:hover {
		color: var(--gray-400)
	}
	
	.vc-is-dark .vc-am-pm button[data-v-021f332c]:focus {
		border-color: var(--accent-500)
	}
	
	.vc-is-dark .vc-am-pm button.active[data-v-021f332c] {
		background: var(--accent-500);
		color: var(--white)
	}
	
	.vc-is-dark .vc-am-pm button.active[data-v-021f332c]:hover {
		background: var(--accent-600)
	}
	
	.vc-is-dark .vc-am-pm button.active[data-v-021f332c]:focus {
		border-color: var(--accent-500)
	}
	</style>
	<style type="text/css">
	.toast-title {
		font-weight: 700
	}
	
	.toast-message {
		-ms-word-wrap: break-word;
		word-wrap: break-word
	}
	
	.toast-message a,
	.toast-message label {
		color: #fff
	}
	
	.toast-message a:hover {
		color: #ccc;
		text-decoration: none
	}
	
	.toast-close-button {
		position: relative;
		right: -.3em;
		top: -.3em;
		float: right;
		font-size: 20px;
		font-weight: 700;
		color: #fff;
		-webkit-text-shadow: 0 1px 0 #fff;
		text-shadow: 0 1px 0 #fff;
		opacity: .8
	}
	
	.toast-close-button:focus,
	.toast-close-button:hover {
		color: #000;
		text-decoration: none;
		cursor: pointer;
		opacity: .4
	}
	
	button.toast-close-button {
		padding: 0;
		cursor: pointer;
		background: 0 0;
		border: 0;
		-webkit-appearance: none
	}
	
	.toast-top-center {
		top: 0;
		right: 0;
		width: 100%
	}
	
	.toast-bottom-center {
		bottom: 0;
		right: 0;
		width: 100%
	}
	
	.toast-top-full-width {
		top: 0;
		right: 0;
		width: 100%
	}
	
	.toast-bottom-full-width {
		bottom: 0;
		right: 0;
		width: 100%
	}
	
	.toast-top-left {
		top: 12px;
		left: 12px
	}
	
	.toast-top-right {
		top: 12px;
		right: 12px
	}
	
	.toast-bottom-right {
		right: 12px;
		bottom: 12px
	}
	
	.toast-bottom-left {
		bottom: 12px;
		left: 12px
	}
	
	.toast-container {
		position: fixed;
		z-index: 999999;
		pointer-events: none
	}
	
	.toast-container * {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box
	}
	
	.toast-container>div {
		position: relative;
		pointer-events: auto;
		overflow: hidden;
		margin: 0 0 6px;
		padding: 15px 15px 15px 50px;
		width: 300px;
		-moz-border-radius: 3px 3px 3px 3px;
		-webkit-border-radius: 3px 3px 3px 3px;
		border-radius: 3px 3px 3px 3px;
		background-position: 15px center;
		background-repeat: no-repeat;
		-moz-box-shadow: 0 0 12px #999;
		-webkit-box-shadow: 0 0 12px #999;
		box-shadow: 0 0 12px #999;
		color: #fff;
		opacity: .8
	}
	
	.toast-container>:hover {
		-moz-box-shadow: 0 0 12px #000;
		-webkit-box-shadow: 0 0 12px #000;
		box-shadow: 0 0 12px #000;
		opacity: 1;
		cursor: pointer
	}
	
	.toast-container>.toast-info {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=)!important
	}
	
	.toast-container>.toast-error {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=)!important
	}
	
	.toast-container>.toast-success {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==)!important
	}
	
	.toast-container>.toast-warning {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=)!important
	}
	
	.toast-container.toast-bottom-center>div,
	.toast-container.toast-top-center>div {
		width: 300px;
		margin-left: auto;
		margin-right: auto
	}
	
	.toast-container.toast-bottom-full-width>div,
	.toast-container.toast-top-full-width>div {
		width: 96%;
		margin-left: auto;
		margin-right: auto
	}
	
	.toast {
		background-color: #030303
	}
	
	.toast-success {
		background-color: #51a351
	}
	
	.toast-error {
		background-color: #bd362f
	}
	
	.toast-info {
		background-color: #2f96b4
	}
	
	.toast-warning {
		background-color: #f89406
	}
	
	.toast-progress {
		position: absolute;
		left: 0;
		bottom: 0;
		height: 4px;
		background-color: #000;
		opacity: .4
	}
	
	@media all and (max-width:240px) {
		.toast-container>div {
			padding: 8px 8px 8px 50px;
			width: 11em
		}
		.toast-container .toast-close-button {
			right: -.2em;
			top: -.2em
		}
	}
	
	@media all and (min-width:241px) and (max-width:480px) {
		.toast-container>div {
			padding: 8px 8px 8px 50px;
			width: 18em
		}
		.toast-container .toast-close-button {
			right: -.2em;
			top: -.2em
		}
	}
	
	@media all and (min-width:481px) and (max-width:768px) {
		.toast-container>div {
			padding: 15px 15px 15px 50px;
			width: 25em
		}
	}
	</style>
	<style type="text/css">
	.small-sort-icon svg {
		height: 10px !important;
	}
	</style>
	<style type="text/css">
	html[data-v-d0e76f98],
	body[data-v-d0e76f98] {
		height: 100%;
	}
	
	img[data-v-d0e76f98] {
		max-width: 400px;
	}
	</style>
	<style type="text/css">
	/* classes attached to <body> */
	/* TODO: make fc-event selector work when calender in shadow DOM */
	
	.fc-not-allowed,
	.fc-not-allowed .fc-event {
		/* override events' custom cursors */
		cursor: not-allowed;
	}
	/* TODO: not attached to body. attached to specific els. move */
	
	.fc-unselectable {
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-touch-callout: none;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}
	
	.fc {
		/* layout of immediate children */
		display: flex;
		flex-direction: column;
		font-size: 1em
	}
	
	.fc,
	.fc *,
	.fc *:before,
	.fc *:after {
		box-sizing: border-box;
	}
	
	.fc table {
		border-collapse: collapse;
		border-spacing: 0;
		font-size: 1em;
		/* normalize cross-browser */
	}
	
	.fc th {
		text-align: center;
	}
	
	.fc th,
	.fc td {
		vertical-align: top;
		padding: 0;
	}
	
	.fc a[data-navlink] {
		cursor: pointer;
	}
	
	.fc a[data-navlink]:hover {
		text-decoration: underline;
	}
	
	.fc-direction-ltr {
		direction: ltr;
		text-align: left;
	}
	
	.fc-direction-rtl {
		direction: rtl;
		text-align: right;
	}
	
	.fc-theme-standard td,
	.fc-theme-standard th {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd);
	}
	/* for FF, which doesn't expand a 100% div within a table cell. use absolute positioning */
	/* inner-wrappers are responsible for being absolute */
	/* TODO: best place for this? */
	
	.fc-liquid-hack td,
	.fc-liquid-hack th {
		position: relative;
	}
	
	@font-face {
		font-family: 'fcicons';
		src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBfAAAAC8AAAAYGNtYXAXVtKNAAABHAAAAFRnYXNwAAAAEAAAAXAAAAAIZ2x5ZgYydxIAAAF4AAAFNGhlYWQUJ7cIAAAGrAAAADZoaGVhB20DzAAABuQAAAAkaG10eCIABhQAAAcIAAAALGxvY2ED4AU6AAAHNAAAABhtYXhwAA8AjAAAB0wAAAAgbmFtZXsr690AAAdsAAABhnBvc3QAAwAAAAAI9AAAACAAAwPAAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpBgPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAOAAAAAoACAACAAIAAQAg6Qb//f//AAAAAAAg6QD//f//AAH/4xcEAAMAAQAAAAAAAAAAAAAAAQAB//8ADwABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAWIAjQKeAskAEwAAJSc3NjQnJiIHAQYUFwEWMjc2NCcCnuLiDQ0MJAz/AA0NAQAMJAwNDcni4gwjDQwM/wANIwz/AA0NDCMNAAAAAQFiAI0CngLJABMAACUBNjQnASYiBwYUHwEHBhQXFjI3AZ4BAA0N/wAMJAwNDeLiDQ0MJAyNAQAMIw0BAAwMDSMM4uINIwwNDQAAAAIA4gC3Ax4CngATACcAACUnNzY0JyYiDwEGFB8BFjI3NjQnISc3NjQnJiIPAQYUHwEWMjc2NCcB87e3DQ0MIw3VDQ3VDSMMDQ0BK7e3DQ0MJAzVDQ3VDCQMDQ3zuLcMJAwNDdUNIwzWDAwNIwy4twwkDA0N1Q0jDNYMDA0jDAAAAgDiALcDHgKeABMAJwAAJTc2NC8BJiIHBhQfAQcGFBcWMjchNzY0LwEmIgcGFB8BBwYUFxYyNwJJ1Q0N1Q0jDA0Nt7cNDQwjDf7V1Q0N1QwkDA0Nt7cNDQwkDLfWDCMN1Q0NDCQMt7gMIw0MDNYMIw3VDQ0MJAy3uAwjDQwMAAADAFUAAAOrA1UAMwBoAHcAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMhMjY1NCYjISIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAAVYRGRkR/qoRGRkRA1UFBAUOCQkVDAsZDf2rDRkLDBUJCA4FBQUFBQUOCQgVDAsZDQJVDRkLDBUJCQ4FBAVVAgECBQMCBwQECAX9qwQJAwQHAwMFAQICAgIBBQMDBwQDCQQCVQUIBAQHAgMFAgEC/oAZEhEZGRESGQAAAAADAFUAAAOrA1UAMwBoAIkAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMzFRQWMzI2PQEzMjY1NCYrATU0JiMiBh0BIyIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAgBkSEhmAERkZEYAZEhIZgBEZGREDVQUEBQ4JCRUMCxkN/asNGQsMFQkIDgUFBQUFBQ4JCBUMCxkNAlUNGQsMFQkJDgUEBVUCAQIFAwIHBAQIBf2rBAkDBAcDAwUBAgICAgEFAwMHBAMJBAJVBQgEBAcCAwUCAQL+gIASGRkSgBkSERmAEhkZEoAZERIZAAABAOIAjQMeAskAIAAAExcHBhQXFjI/ARcWMjc2NC8BNzY0JyYiDwEnJiIHBhQX4uLiDQ0MJAzi4gwkDA0N4uINDQwkDOLiDCQMDQ0CjeLiDSMMDQ3h4Q0NDCMN4uIMIw0MDOLiDAwNIwwAAAABAAAAAQAAa5n0y18PPPUACwQAAAAAANivOVsAAAAA2K85WwAAAAADqwNVAAAACAACAAAAAAAAAAEAAAPA/8AAAAQAAAAAAAOrAAEAAAAAAAAAAAAAAAAAAAALBAAAAAAAAAAAAAAAAgAAAAQAAWIEAAFiBAAA4gQAAOIEAABVBAAAVQQAAOIAAAAAAAoAFAAeAEQAagCqAOoBngJkApoAAQAAAAsAigADAAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAA4ArgABAAAAAAABAAcAAAABAAAAAAACAAcAYAABAAAAAAADAAcANgABAAAAAAAEAAcAdQABAAAAAAAFAAsAFQABAAAAAAAGAAcASwABAAAAAAAKABoAigADAAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGZjaWNvbnMAZgBjAGkAYwBvAG4Ac1ZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGZjaWNvbnMAZgBjAGkAYwBvAG4Ac2ZjaWNvbnMAZgBjAGkAYwBvAG4Ac1JlZ3VsYXIAUgBlAGcAdQBsAGEAcmZjaWNvbnMAZgBjAGkAYwBvAG4Ac0ZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=") format('truetype');
		font-weight: normal;
		font-style: normal;
	}
	
	.fc-icon {
		/* added for fc */
		display: inline-block;
		width: 1em;
		height: 1em;
		text-align: center;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		/* use !important to prevent issues with browser extensions that change fonts */
		font-family: 'fcicons' !important;
		speak: none;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		line-height: 1;
		/* Better Font Rendering =========== */
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	
	.fc-icon-chevron-left:before {
		content: "\E900";
	}
	
	.fc-icon-chevron-right:before {
		content: "\E901";
	}
	
	.fc-icon-chevrons-left:before {
		content: "\E902";
	}
	
	.fc-icon-chevrons-right:before {
		content: "\E903";
	}
	
	.fc-icon-minus-square:before {
		content: "\E904";
	}
	
	.fc-icon-plus-square:before {
		content: "\E905";
	}
	
	.fc-icon-x:before {
		content: "\E906";
	}
	/*
Lots taken from Flatly (MIT): https://bootswatch.com/4/flatly/bootstrap.css

These styles only apply when the standard-theme is activated.
When it's NOT activated, the fc-button classes won't even be in the DOM.
*/
	
	.fc {
		/* reset */
	}
	
	.fc .fc-button {
		border-radius: 0;
		overflow: visible;
		text-transform: none;
		margin: 0;
		font-family: inherit;
		font-size: inherit;
		line-height: inherit;
	}
	
	.fc .fc-button:focus {
		outline: 1px dotted;
		outline: 5px auto -webkit-focus-ring-color;
	}
	
	.fc .fc-button {
		-webkit-appearance: button;
	}
	
	.fc .fc-button:not(:disabled) {
		cursor: pointer;
	}
	
	.fc .fc-button::-moz-focus-inner {
		padding: 0;
		border-style: none;
	}
	
	.fc {
		/* theme */
	}
	
	.fc .fc-button {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		vertical-align: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-color: transparent;
		border: 1px solid transparent;
		padding: 0.4em 0.65em;
		font-size: 1em;
		line-height: 1.5;
		border-radius: 0.25em;
	}
	
	.fc .fc-button:hover {
		text-decoration: none;
	}
	
	.fc .fc-button:focus {
		outline: 0;
		box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
	}
	
	.fc .fc-button:disabled {
		opacity: 0.65;
	}
	
	.fc {
		/* "primary" coloring */
	}
	
	.fc .fc-button-primary {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #2C3E50;
		background-color: var(--fc-button-bg-color, #2C3E50);
		border-color: #2C3E50;
		border-color: var(--fc-button-border-color, #2C3E50);
	}
	
	.fc .fc-button-primary:hover {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #1e2b37;
		background-color: var(--fc-button-hover-bg-color, #1e2b37);
		border-color: #1a252f;
		border-color: var(--fc-button-hover-border-color, #1a252f);
	}
	
	.fc .fc-button-primary:disabled {
		/* not DRY */
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #2C3E50;
		background-color: var(--fc-button-bg-color, #2C3E50);
		border-color: #2C3E50;
		border-color: var(--fc-button-border-color, #2C3E50);
		/* overrides :hover */
	}
	
	.fc .fc-button-primary:focus {
		box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5);
	}
	
	.fc .fc-button-primary:not(:disabled):active,
	.fc .fc-button-primary:not(:disabled).fc-button-active {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #1a252f;
		background-color: var(--fc-button-active-bg-color, #1a252f);
		border-color: #151e27;
		border-color: var(--fc-button-active-border-color, #151e27);
	}
	
	.fc .fc-button-primary:not(:disabled):active:focus,
	.fc .fc-button-primary:not(:disabled).fc-button-active:focus {
		box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5);
	}
	
	.fc {
		/* icons within buttons */
	}
	
	.fc .fc-button .fc-icon {
		vertical-align: middle;
		font-size: 1.5em;
		/* bump up the size (but don't make it bigger than line-height of button, which is 1.5em also) */
	}
	
	.fc .fc-button-group {
		position: relative;
		display: inline-flex;
		vertical-align: middle;
	}
	
	.fc .fc-button-group > .fc-button {
		position: relative;
		flex: 1 1 auto;
	}
	
	.fc .fc-button-group > .fc-button:hover {
		z-index: 1;
	}
	
	.fc .fc-button-group > .fc-button:focus,
	.fc .fc-button-group > .fc-button:active,
	.fc .fc-button-group > .fc-button.fc-button-active {
		z-index: 1;
	}
	
	.fc-direction-ltr .fc-button-group > .fc-button:not(:first-child) {
		margin-left: -1px;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
	}
	
	.fc-direction-ltr .fc-button-group > .fc-button:not(:last-child) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}
	
	.fc-direction-rtl .fc-button-group > .fc-button:not(:first-child) {
		margin-right: -1px;
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}
	
	.fc-direction-rtl .fc-button-group > .fc-button:not(:last-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
	}
	
	.fc .fc-toolbar {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	
	.fc .fc-toolbar.fc-header-toolbar {
		margin-bottom: 1.5em;
	}
	
	.fc .fc-toolbar.fc-footer-toolbar {
		margin-top: 1.5em;
	}
	
	.fc .fc-toolbar-title {
		font-size: 1.75em;
		margin: 0;
	}
	
	.fc-direction-ltr .fc-toolbar > * >:not(:first-child) {
		margin-left: .75em;
		/* space between */
	}
	
	.fc-direction-rtl .fc-toolbar > * >:not(:first-child) {
		margin-right: .75em;
		/* space between */
	}
	
	.fc-direction-rtl .fc-toolbar-ltr {
		/* when the toolbar-chunk positioning system is explicitly left-to-right */
		flex-direction: row-reverse;
	}
	
	.fc .fc-scroller {
		-webkit-overflow-scrolling: touch;
		position: relative;
		/* for abs-positioned elements within */
	}
	
	.fc .fc-scroller-liquid {
		height: 100%;
	}
	
	.fc .fc-scroller-liquid-absolute {
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
	}
	
	.fc .fc-scroller-harness {
		position: relative;
		overflow: hidden;
		direction: ltr;
		/* hack for chrome computing the scroller's right/left wrong for rtl. undone below... */
		/* TODO: demonstrate in codepen */
	}
	
	.fc .fc-scroller-harness-liquid {
		height: 100%;
	}
	
	.fc-direction-rtl .fc-scroller-harness > .fc-scroller {
		/* undo above hack */
		direction: rtl;
	}
	
	.fc-theme-standard .fc-scrollgrid {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd);
		/* bootstrap does this. match */
	}
	
	.fc .fc-scrollgrid,
	.fc .fc-scrollgrid table {
		/* all tables (self included) */
		width: 100%;
		/* because tables don't normally do this */
		table-layout: fixed;
	}
	
	.fc .fc-scrollgrid table {
		/* inner tables */
		border-top-style: hidden;
		border-left-style: hidden;
		border-right-style: hidden;
	}
	
	.fc .fc-scrollgrid {
		border-collapse: separate;
		border-right-width: 0;
		border-bottom-width: 0;
	}
	
	.fc .fc-scrollgrid-liquid {
		height: 100%;
	}
	
	.fc .fc-scrollgrid-section {
		/* a <tr> */
		height: 1px/* better than 0, for firefox */
	}
	
	.fc .fc-scrollgrid-section > td {
		height: 1px;
		/* needs a height so inner div within grow. better than 0, for firefox */
	}
	
	.fc .fc-scrollgrid-section table {
		height: 1px;
		/* for most browsers, if a height isn't set on the table, can't do liquid-height within cells */
		/* serves as a min-height. harmless */
	}
	
	.fc .fc-scrollgrid-section-liquid > td {
		height: 100%;
		/* better than `auto`, for firefox */
	}
	
	.fc .fc-scrollgrid-section > * {
		border-top-width: 0;
		border-left-width: 0;
	}
	
	.fc .fc-scrollgrid-section-header > *,
	.fc .fc-scrollgrid-section-footer > * {
		border-bottom-width: 0;
	}
	
	.fc .fc-scrollgrid-section-body table,
	.fc .fc-scrollgrid-section-footer table {
		border-bottom-style: hidden;
		/* head keeps its bottom border tho */
	}
	
	.fc {
		/* stickiness */
	}
	
	.fc .fc-scrollgrid-section-sticky > * {
		background: #fff;
		background: var(--fc-page-bg-color, #fff);
		position: sticky;
		z-index: 3;
		/* TODO: var */
		/* TODO: box-shadow when sticking */
	}
	
	.fc .fc-scrollgrid-section-header.fc-scrollgrid-section-sticky > * {
		top: 0;
		/* because border-sharing causes a gap at the top */
		/* TODO: give safari -1. has bug */
	}
	
	.fc .fc-scrollgrid-section-footer.fc-scrollgrid-section-sticky > * {
		bottom: 0;
		/* known bug: bottom-stickiness doesn't work in safari */
	}
	
	.fc .fc-scrollgrid-sticky-shim {
		/* for horizontal scrollbar */
		height: 1px;
		/* needs height to create scrollbars */
		margin-bottom: -1px;
	}
	
	.fc-sticky {
		/* no .fc wrap because used as child of body */
		position: sticky;
	}
	
	.fc .fc-view-harness {
		flex-grow: 1;
		/* because this harness is WITHIN the .fc's flexbox */
		position: relative;
	}
	
	.fc {
		/* when the harness controls the height, make the view liquid */
	}
	
	.fc .fc-view-harness-active > .fc-view {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
	}
	
	.fc .fc-col-header-cell-cushion {
		display: inline-block;
		/* x-browser for when sticky (when multi-tier header) */
		padding: 2px 4px;
	}
	
	.fc .fc-bg-event,
	.fc .fc-non-business,
	.fc .fc-highlight {
		/* will always have a harness with position:relative/absolute, so absolutely expand */
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
	}
	
	.fc .fc-non-business {
		background: rgba(215, 215, 215, 0.3);
		background: var(--fc-non-business-color, rgba(215, 215, 215, 0.3));
	}
	
	.fc .fc-bg-event {
		background: rgb(143, 223, 130);
		background: var(--fc-bg-event-color, rgb(143, 223, 130));
		opacity: 0.3;
		opacity: var(--fc-bg-event-opacity, 0.3)
	}
	
	.fc .fc-bg-event .fc-event-title {
		margin: .5em;
		font-size: .85em;
		font-size: var(--fc-small-font-size, .85em);
		font-style: italic;
	}
	
	.fc .fc-highlight {
		background: rgba(188, 232, 241, 0.3);
		background: var(--fc-highlight-color, rgba(188, 232, 241, 0.3));
	}
	
	.fc .fc-cell-shaded,
	.fc .fc-day-disabled {
		background: rgba(208, 208, 208, 0.3);
		background: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3));
	}
	/* link resets */
	/* ---------------------------------------------------------------------------------------------------- */
	
	a.fc-event,
	a.fc-event:hover {
		text-decoration: none;
	}
	/* cursor */
	
	.fc-event[href],
	.fc-event.fc-event-draggable {
		cursor: pointer;
	}
	/* event text content */
	/* ---------------------------------------------------------------------------------------------------- */
	
	.fc-event .fc-event-main {
		position: relative;
		z-index: 2;
	}
	/* dragging */
	/* ---------------------------------------------------------------------------------------------------- */
	
	.fc-event-dragging:not(.fc-event-selected) {
		/* MOUSE */
		opacity: 0.75;
	}
	
	.fc-event-dragging.fc-event-selected {
		/* TOUCH */
		box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3);
	}
	/* resizing */
	/* ---------------------------------------------------------------------------------------------------- */
	/* (subclasses should hone positioning for touch and non-touch) */
	
	.fc-event .fc-event-resizer {
		display: none;
		position: absolute;
		z-index: 4;
	}
	
	.fc-event:hover,
	/* MOUSE */
	
	.fc-event-selected {
		/* TOUCH */
	}
	
	.fc-event:hover .fc-event-resizer,
	.fc-event-selected .fc-event-resizer {
		display: block;
	}
	
	.fc-event-selected .fc-event-resizer {
		border-radius: 4px;
		border-radius: calc(var(--fc-event-resizer-dot-total-width, 8px) / 2);
		border-width: 1px;
		border-width: var(--fc-event-resizer-dot-border-width, 1px);
		width: 8px;
		width: var(--fc-event-resizer-dot-total-width, 8px);
		height: 8px;
		height: var(--fc-event-resizer-dot-total-width, 8px);
		border-style: solid;
		border-color: inherit;
		background: #fff;
		background: var(--fc-page-bg-color, #fff)
		/* expand hit area */
	}
	
	.fc-event-selected .fc-event-resizer:before {
		content: '';
		position: absolute;
		top: -20px;
		left: -20px;
		right: -20px;
		bottom: -20px;
	}
	/* selecting (always TOUCH) */
	/* ---------------------------------------------------------------------------------------------------- */
	
	.fc-event-selected {
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2)
		/* expand hit area (subclasses should expand) */
	}
	
	.fc-event-selected:before {
		content: "";
		position: absolute;
		z-index: 3;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
	}
	
	.fc-event-selected {
		/* dimmer effect */
	}
	
	.fc-event-selected:after {
		content: "";
		background: rgba(0, 0, 0, 0.25);
		background: var(--fc-event-selected-overlay-color, rgba(0, 0, 0, 0.25));
		position: absolute;
		z-index: 1;
		/* assume there's a border on all sides. overcome it. */
		/* sometimes there's NOT a border, in which case the dimmer will go over */
		/* an adjacent border, which looks fine. */
		top: -1px;
		left: -1px;
		right: -1px;
		bottom: -1px;
	}
	/*
A HORIZONTAL event
*/
	
	.fc-h-event {
		/* allowed to be top-level */
		display: block;
		border: 1px solid #3788d8;
		border: 1px solid var(--fc-event-border-color, #3788d8);
		background-color: #3788d8;
		background-color: var(--fc-event-bg-color, #3788d8)
	}
	
	.fc-h-event .fc-event-main {
		color: #fff;
		color: var(--fc-event-text-color, #fff);
	}
	
	.fc-h-event .fc-event-main-frame {
		display: flex;
		/* for make fc-event-title-container expand */
	}
	
	.fc-h-event .fc-event-time {
		max-width: 100%;
		/* clip overflow on this element */
		overflow: hidden;
	}
	
	.fc-h-event .fc-event-title-container {
		/* serves as a container for the sticky cushion */
		flex-grow: 1;
		flex-shrink: 1;
		min-width: 0;
		/* important for allowing to shrink all the way */
	}
	
	.fc-h-event .fc-event-title {
		display: inline-block;
		/* need this to be sticky cross-browser */
		vertical-align: top;
		/* for not messing up line-height */
		left: 0;
		/* for sticky */
		right: 0;
		/* for sticky */
		max-width: 100%;
		/* clip overflow on this element */
		overflow: hidden;
	}
	
	.fc-h-event.fc-event-selected:before {
		/* expand hit area */
		top: -10px;
		bottom: -10px;
	}
	/* adjust border and border-radius (if there is any) for non-start/end */
	
	.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-start),
	.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-end) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-left-width: 0;
	}
	
	.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-end),
	.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-start) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
		border-right-width: 0;
	}
	/* resizers */
	
	.fc-h-event:not(.fc-event-selected) .fc-event-resizer {
		top: 0;
		bottom: 0;
		width: 8px;
		width: var(--fc-event-resizer-thickness, 8px);
	}
	
	.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start,
	.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end {
		cursor: w-resize;
		left: -4px;
		left: calc(var(--fc-event-resizer-thickness, 8px) / -2);
	}
	
	.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end,
	.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start {
		cursor: e-resize;
		right: -4px;
		right: calc(var(--fc-event-resizer-thickness, 8px) / -2);
	}
	/* resizers for TOUCH */
	
	.fc-h-event.fc-event-selected .fc-event-resizer {
		top: 50%;
		margin-top: -4px;
		margin-top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-start,
	.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-end {
		left: -4px;
		left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-end,
	.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-start {
		right: -4px;
		right: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc .fc-popover {
		position: absolute;
		z-index: 9999;
		box-shadow: 0 2px 6px rgba(0, 0, 0, .15);
	}
	
	.fc .fc-popover-header {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		padding: 3px 4px;
	}
	
	.fc .fc-popover-title {
		margin: 0 2px;
	}
	
	.fc .fc-popover-close {
		cursor: pointer;
		opacity: 0.65;
		font-size: 1.1em;
	}
	
	.fc-theme-standard .fc-popover {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd);
		background: #fff;
		background: var(--fc-page-bg-color, #fff);
	}
	
	.fc-theme-standard .fc-popover-header {
		background: rgba(208, 208, 208, 0.3);
		background: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3));
	}
	</style>
	<style type="text/css">
	:root {
		--fc-daygrid-event-dot-width: 8px;
	}
	/* help things clear margins of inner content */
	
	.fc-daygrid-day-frame,
	.fc-daygrid-day-events,
	.fc-daygrid-event-harness {
		/* for event top/bottom margins */
	}
	
	.fc-daygrid-day-frame:before,
	.fc-daygrid-day-events:before,
	.fc-daygrid-event-harness:before {
		content: "";
		clear: both;
		display: table;
	}
	
	.fc-daygrid-day-frame:after,
	.fc-daygrid-day-events:after,
	.fc-daygrid-event-harness:after {
		content: "";
		clear: both;
		display: table;
	}
	
	.fc .fc-daygrid-body {
		/* a <div> that wraps the table */
		position: relative;
		z-index: 1;
		/* container inner z-index's because <tr>s can't do it */
	}
	
	.fc .fc-daygrid-day.fc-day-today {
		background-color: rgba(255, 220, 40, 0.15);
		background-color: var(--fc-today-bg-color, rgba(255, 220, 40, 0.15));
	}
	
	.fc .fc-daygrid-day-frame {
		position: relative;
		min-height: 100%;
		/* seems to work better than `height` because sets height after rows/cells naturally do it */
	}
	
	.fc {
		/* cell top */
	}
	
	.fc .fc-daygrid-day-top {
		display: flex;
		flex-direction: row-reverse;
	}
	
	.fc .fc-day-other .fc-daygrid-day-top {
		opacity: 0.3;
	}
	
	.fc {
		/* day number (within cell top) */
	}
	
	.fc .fc-daygrid-day-number {
		position: relative;
		z-index: 4;
		padding: 4px;
	}
	
	.fc {
		/* event container */
	}
	
	.fc .fc-daygrid-day-events {
		margin-top: 1px;
		/* needs to be margin, not padding, so that available cell height can be computed */
	}
	
	.fc {
		/* positioning for balanced vs natural */
	}
	
	.fc .fc-daygrid-body-balanced .fc-daygrid-day-events {
		position: absolute;
		left: 0;
		right: 0;
	}
	
	.fc .fc-daygrid-body-unbalanced .fc-daygrid-day-events {
		position: relative;
		/* for containing abs positioned event harnesses */
		min-height: 2em;
		/* in addition to being a min-height during natural height, equalizes the heights a little bit */
	}
	
	.fc .fc-daygrid-body-natural {
		/* can coexist with -unbalanced */
	}
	
	.fc .fc-daygrid-body-natural .fc-daygrid-day-events {
		margin-bottom: 1em;
	}
	
	.fc {
		/* event harness */
	}
	
	.fc .fc-daygrid-event-harness {
		position: relative;
	}
	
	.fc .fc-daygrid-event-harness-abs {
		position: absolute;
		top: 0;
		/* fallback coords for when cannot yet be computed */
		left: 0;
		/* */
		right: 0;
		/* */
	}
	
	.fc .fc-daygrid-bg-harness {
		position: absolute;
		top: 0;
		bottom: 0;
	}
	
	.fc {
		/* bg content */
	}
	
	.fc .fc-daygrid-day-bg .fc-non-business {
		z-index: 1
	}
	
	.fc .fc-daygrid-day-bg .fc-bg-event {
		z-index: 2
	}
	
	.fc .fc-daygrid-day-bg .fc-highlight {
		z-index: 3
	}
	
	.fc {
		/* events */
	}
	
	.fc .fc-daygrid-event {
		z-index: 6;
		margin-top: 1px;
	}
	
	.fc .fc-daygrid-event.fc-event-mirror {
		z-index: 7;
	}
	
	.fc {
		/* cell bottom (within day-events) */
	}
	
	.fc .fc-daygrid-day-bottom {
		font-size: .85em;
		padding: 2px 3px 0
	}
	
	.fc .fc-daygrid-day-bottom:before {
		content: "";
		clear: both;
		display: table;
	}
	
	.fc .fc-daygrid-more-link {
		position: relative;
		z-index: 4;
		cursor: pointer;
	}
	
	.fc {
		/* week number (within frame) */
	}
	
	.fc .fc-daygrid-week-number {
		position: absolute;
		z-index: 5;
		top: 0;
		padding: 2px;
		min-width: 1.5em;
		text-align: center;
		background-color: rgba(208, 208, 208, 0.3);
		background-color: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3));
		color: #808080;
		color: var(--fc-neutral-text-color, #808080);
	}
	
	.fc {
		/* popover */
	}
	
	.fc .fc-more-popover .fc-popover-body {
		min-width: 220px;
		padding: 10px;
	}
	
	.fc-direction-ltr .fc-daygrid-event.fc-event-start,
	.fc-direction-rtl .fc-daygrid-event.fc-event-end {
		margin-left: 2px;
	}
	
	.fc-direction-ltr .fc-daygrid-event.fc-event-end,
	.fc-direction-rtl .fc-daygrid-event.fc-event-start {
		margin-right: 2px;
	}
	
	.fc-direction-ltr .fc-daygrid-week-number {
		left: 0;
		border-radius: 0 0 3px 0;
	}
	
	.fc-direction-rtl .fc-daygrid-week-number {
		right: 0;
		border-radius: 0 0 0 3px;
	}
	
	.fc-liquid-hack .fc-daygrid-day-frame {
		position: static;
		/* will cause inner absolute stuff to expand to <td> */
	}
	
	.fc-daygrid-event {
		/* make root-level, because will be dragged-and-dropped outside of a component root */
		position: relative;
		/* for z-indexes assigned later */
		white-space: nowrap;
		border-radius: 3px;
		/* dot event needs this to when selected */
		font-size: .85em;
		font-size: var(--fc-small-font-size, .85em);
	}
	/* --- the rectangle ("block") style of event --- */
	
	.fc-daygrid-block-event .fc-event-time {
		font-weight: bold;
	}
	
	.fc-daygrid-block-event .fc-event-time,
	.fc-daygrid-block-event .fc-event-title {
		padding: 1px;
	}
	/* --- the dot style of event --- */
	
	.fc-daygrid-dot-event {
		display: flex;
		align-items: center;
		padding: 2px 0
	}
	
	.fc-daygrid-dot-event .fc-event-title {
		flex-grow: 1;
		flex-shrink: 1;
		min-width: 0;
		/* important for allowing to shrink all the way */
		overflow: hidden;
		font-weight: bold;
	}
	
	.fc-daygrid-dot-event:hover,
	.fc-daygrid-dot-event.fc-event-mirror {
		background: rgba(0, 0, 0, 0.1);
	}
	
	.fc-daygrid-dot-event.fc-event-selected:before {
		/* expand hit area */
		top: -10px;
		bottom: -10px;
	}
	
	.fc-daygrid-event-dot {
		/* the actual dot */
		margin: 0 4px;
		box-sizing: content-box;
		width: 0;
		height: 0;
		border: 4px solid #3788d8;
		border: calc(var(--fc-daygrid-event-dot-width, 8px) / 2) solid var(--fc-event-border-color, #3788d8);
		border-radius: 4px;
		border-radius: calc(var(--fc-daygrid-event-dot-width, 8px) / 2);
	}
	/* --- spacing between time and title --- */
	
	.fc-direction-ltr .fc-daygrid-event .fc-event-time {
		margin-right: 3px;
	}
	
	.fc-direction-rtl .fc-daygrid-event .fc-event-time {
		margin-left: 3px;
	}
	</style>
	<style type="text/css">
	/*
A VERTICAL event
*/
	
	.fc-v-event {
		/* allowed to be top-level */
		display: block;
		border: 1px solid #3788d8;
		border: 1px solid var(--fc-event-border-color, #3788d8);
		background-color: #3788d8;
		background-color: var(--fc-event-bg-color, #3788d8)
	}
	
	.fc-v-event .fc-event-main {
		color: #fff;
		color: var(--fc-event-text-color, #fff);
		height: 100%;
	}
	
	.fc-v-event .fc-event-main-frame {
		height: 100%;
		display: flex;
		flex-direction: column;
	}
	
	.fc-v-event .fc-event-time {
		flex-grow: 0;
		flex-shrink: 0;
		max-height: 100%;
		overflow: hidden;
	}
	
	.fc-v-event .fc-event-title-container {
		/* a container for the sticky cushion */
		flex-grow: 1;
		flex-shrink: 1;
		min-height: 0;
		/* important for allowing to shrink all the way */
	}
	
	.fc-v-event .fc-event-title {
		/* will have fc-sticky on it */
		top: 0;
		bottom: 0;
		max-height: 100%;
		/* clip overflow */
		overflow: hidden;
	}
	
	.fc-v-event:not(.fc-event-start) {
		border-top-width: 0;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
	
	.fc-v-event:not(.fc-event-end) {
		border-bottom-width: 0;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	
	.fc-v-event.fc-event-selected:before {
		/* expand hit area */
		left: -10px;
		right: -10px;
	}
	
	.fc-v-event {
		/* resizer (mouse AND touch) */
	}
	
	.fc-v-event .fc-event-resizer-start {
		cursor: n-resize;
	}
	
	.fc-v-event .fc-event-resizer-end {
		cursor: s-resize;
	}
	
	.fc-v-event {
		/* resizer for MOUSE */
	}
	
	.fc-v-event:not(.fc-event-selected) .fc-event-resizer {
		height: 8px;
		height: var(--fc-event-resizer-thickness, 8px);
		left: 0;
		right: 0;
	}
	
	.fc-v-event:not(.fc-event-selected) .fc-event-resizer-start {
		top: -4px;
		top: calc(var(--fc-event-resizer-thickness, 8px) / -2);
	}
	
	.fc-v-event:not(.fc-event-selected) .fc-event-resizer-end {
		bottom: -4px;
		bottom: calc(var(--fc-event-resizer-thickness, 8px) / -2);
	}
	
	.fc-v-event {
		/* resizer for TOUCH (when event is "selected") */
	}
	
	.fc-v-event.fc-event-selected .fc-event-resizer {
		left: 50%;
		margin-left: -4px;
		margin-left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc-v-event.fc-event-selected .fc-event-resizer-start {
		top: -4px;
		top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc-v-event.fc-event-selected .fc-event-resizer-end {
		bottom: -4px;
		bottom: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
	}
	
	.fc .fc-timegrid .fc-daygrid-body {
		/* the all-day daygrid within the timegrid view */
		z-index: 2;
		/* put above the timegrid-body so that more-popover is above everything. TODO: better solution */
	}
	
	.fc .fc-timegrid-divider {
		padding: 0 0 2px;
		/* browsers get confused when you set height. use padding instead */
	}
	
	.fc .fc-timegrid-body {
		position: relative;
		z-index: 1;
		/* scope the z-indexes of slots and cols */
		min-height: 100%;
		/* fill height always, even when slat table doesn't grow */
	}
	
	.fc .fc-timegrid-axis-chunk {
		/* for advanced ScrollGrid */
		position: relative/* offset parent for now-indicator-container */
	}
	
	.fc .fc-timegrid-axis-chunk > table {
		position: relative;
		z-index: 1;
		/* above the now-indicator-container */
	}
	
	.fc .fc-timegrid-slots {
		position: relative;
		z-index: 1;
	}
	
	.fc .fc-timegrid-slot {
		/* a <td> */
		height: 1.5em;
		border-bottom: 0/* each cell owns its top border */
	}
	
	.fc .fc-timegrid-slot:empty:before {
		content: '\A0';
		/* make sure there's at least an empty space to create height for height syncing */
	}
	
	.fc .fc-timegrid-slot-minor {
		border-top-style: dotted;
	}
	
	.fc .fc-timegrid-slot-label-cushion {
		display: inline-block;
		white-space: nowrap;
	}
	
	.fc .fc-timegrid-slot-label {
		vertical-align: middle;
		/* vertical align the slots */
	}
	
	.fc {
		/* slots AND axis cells (top-left corner of view including the "all-day" text) */
	}
	
	.fc .fc-timegrid-axis-cushion,
	.fc .fc-timegrid-slot-label-cushion {
		padding: 0 4px;
	}
	
	.fc {
		/* axis cells (top-left corner of view including the "all-day" text) */
		/* vertical align is more complicated, uses flexbox */
	}
	
	.fc .fc-timegrid-axis-frame-liquid {
		height: 100%;
		/* will need liquid-hack in FF */
	}
	
	.fc .fc-timegrid-axis-frame {
		overflow: hidden;
		display: flex;
		align-items: center;
		/* vertical align */
		justify-content: flex-end;
		/* horizontal align. matches text-align below */
	}
	
	.fc .fc-timegrid-axis-cushion {
		max-width: 60px;
		/* limits the width of the "all-day" text */
		flex-shrink: 0;
		/* allows text to expand how it normally would, regardless of constrained width */
	}
	
	.fc-direction-ltr .fc-timegrid-slot-label-frame {
		text-align: right;
	}
	
	.fc-direction-rtl .fc-timegrid-slot-label-frame {
		text-align: left;
	}
	
	.fc-liquid-hack .fc-timegrid-axis-frame-liquid {
		height: auto;
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
	}
	
	.fc .fc-timegrid-col.fc-day-today {
		background-color: rgba(255, 220, 40, 0.15);
		background-color: var(--fc-today-bg-color, rgba(255, 220, 40, 0.15));
	}
	
	.fc .fc-timegrid-col-frame {
		min-height: 100%;
		/* liquid-hack is below */
		position: relative;
	}
	
	.fc-media-screen.fc-liquid-hack .fc-timegrid-col-frame {
		height: auto;
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
	}
	
	.fc-media-screen .fc-timegrid-cols {
		position: absolute;
		/* no z-index. children will decide and go above slots */
		top: 0;
		left: 0;
		right: 0;
		bottom: 0
	}
	
	.fc-media-screen .fc-timegrid-cols > table {
		height: 100%;
	}
	
	.fc-media-screen .fc-timegrid-col-bg,
	.fc-media-screen .fc-timegrid-col-events,
	.fc-media-screen .fc-timegrid-now-indicator-container {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
	}
	
	.fc {
		/* bg */
	}
	
	.fc .fc-timegrid-col-bg {
		z-index: 2;
		/* TODO: kill */
	}
	
	.fc .fc-timegrid-col-bg .fc-non-business {
		z-index: 1
	}
	
	.fc .fc-timegrid-col-bg .fc-bg-event {
		z-index: 2
	}
	
	.fc .fc-timegrid-col-bg .fc-highlight {
		z-index: 3
	}
	
	.fc .fc-timegrid-bg-harness {
		position: absolute;
		/* top/bottom will be set by JS */
		left: 0;
		right: 0;
	}
	
	.fc {
		/* fg events */
		/* (the mirror segs are put into a separate container with same classname, */
		/* and they must be after the normal seg container to appear at a higher z-index) */
	}
	
	.fc .fc-timegrid-col-events {
		z-index: 3;
		/* child event segs have z-indexes that are scoped within this div */
	}
	
	.fc {
		/* now indicator */
	}
	
	.fc .fc-timegrid-now-indicator-container {
		bottom: 0;
		overflow: hidden;
		/* don't let overflow of lines/arrows cause unnecessary scrolling */
		/* z-index is set on the individual elements */
	}
	
	.fc-direction-ltr .fc-timegrid-col-events {
		margin: 0 2.5% 0 2px;
	}
	
	.fc-direction-rtl .fc-timegrid-col-events {
		margin: 0 2px 0 2.5%;
	}
	
	.fc-timegrid-event-harness {
		position: absolute/* top/left/right/bottom will all be set by JS */
	}
	
	.fc-timegrid-event-harness > .fc-timegrid-event {
		position: absolute;
		/* absolute WITHIN the harness */
		top: 0;
		/* for when not yet positioned */
		bottom: 0;
		/* " */
		left: 0;
		right: 0;
	}
	
	.fc-timegrid-event-harness-inset .fc-timegrid-event,
	.fc-timegrid-event.fc-event-mirror,
	.fc-timegrid-more-link {
		box-shadow: 0px 0px 0px 1px #fff;
		box-shadow: 0px 0px 0px 1px var(--fc-page-bg-color, #fff);
	}
	
	.fc-timegrid-event,
	.fc-timegrid-more-link {
		/* events need to be root */
		font-size: .85em;
		font-size: var(--fc-small-font-size, .85em);
		border-radius: 3px;
	}
	
	.fc-timegrid-event {
		/* events need to be root */
		margin-bottom: 1px/* give some space from bottom */
	}
	
	.fc-timegrid-event .fc-event-main {
		padding: 1px 1px 0;
	}
	
	.fc-timegrid-event .fc-event-time {
		white-space: nowrap;
		font-size: .85em;
		font-size: var(--fc-small-font-size, .85em);
		margin-bottom: 1px;
	}
	
	.fc-timegrid-event-short .fc-event-main-frame {
		flex-direction: row;
		overflow: hidden;
	}
	
	.fc-timegrid-event-short .fc-event-time:after {
		content: '\A0-\A0';
		/* dash surrounded by non-breaking spaces */
	}
	
	.fc-timegrid-event-short .fc-event-title {
		font-size: .85em;
		font-size: var(--fc-small-font-size, .85em)
	}
	
	.fc-timegrid-more-link {
		/* does NOT inherit from fc-timegrid-event */
		position: absolute;
		z-index: 9999;
		/* hack */
		color: inherit;
		color: var(--fc-more-link-text-color, inherit);
		background: #d0d0d0;
		background: var(--fc-more-link-bg-color, #d0d0d0);
		cursor: pointer;
		margin-bottom: 1px;
		/* match space below fc-timegrid-event */
	}
	
	.fc-timegrid-more-link-inner {
		/* has fc-sticky */
		padding: 3px 2px;
		top: 0;
	}
	
	.fc-direction-ltr .fc-timegrid-more-link {
		right: 0;
	}
	
	.fc-direction-rtl .fc-timegrid-more-link {
		left: 0;
	}
	
	.fc {
		/* line */
	}
	
	.fc .fc-timegrid-now-indicator-line {
		position: absolute;
		z-index: 4;
		left: 0;
		right: 0;
		border-style: solid;
		border-color: red;
		border-color: var(--fc-now-indicator-color, red);
		border-width: 1px 0 0;
	}
	
	.fc {
		/* arrow */
	}
	
	.fc .fc-timegrid-now-indicator-arrow {
		position: absolute;
		z-index: 4;
		margin-top: -5px;
		/* vertically center on top coordinate */
		border-style: solid;
		border-color: red;
		border-color: var(--fc-now-indicator-color, red);
	}
	
	.fc-direction-ltr .fc-timegrid-now-indicator-arrow {
		left: 0;
		/* triangle pointing right. TODO: mixin */
		border-width: 5px 0 5px 6px;
		border-top-color: transparent;
		border-bottom-color: transparent;
	}
	
	.fc-direction-rtl .fc-timegrid-now-indicator-arrow {
		right: 0;
		/* triangle pointing left. TODO: mixin */
		border-width: 5px 6px 5px 0;
		border-top-color: transparent;
		border-bottom-color: transparent;
	}
	</style>
	<style type="text/css">
	.orgchart-container {
		position: relative;
		display: inline-block;
		height: 420px;
		width: calc(100% - 24px);
		border: 2px dashed #aaa;
		border-radius: 5px;
		overflow: auto;
		text-align: center
	}
	
	.orgchart {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		display: inline-block;
		min-height: 202px;
		min-width: 202px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-image: -webkit-gradient(linear, left top, right top, color-stop(10%, rgba(200, 0, 0, .15)), color-stop(0, transparent)), -webkit-gradient(linear, left top, left bottom, color-stop(10%, rgba(200, 0, 0, .15)), color-stop(0, transparent));
		background-image: linear-gradient(90deg, rgba(200, 0, 0, .15) 10%, transparent 0), linear-gradient(rgba(200, 0, 0, .15) 10%, transparent 0);
		background-size: 10px 10px;
		border: 1px dashed transparent;
		padding: 20px
	}
	
	.orgchart .hidden,
	.orgchart~.hidden {
		display: none
	}
	
	.orgchart.b2t {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg)
	}
	
	.orgchart.l2r {
		position: absolute;
		-webkit-transform: rotate(-90deg) rotateY(180deg);
		transform: rotate(-90deg) rotateY(180deg);
		-webkit-transform-origin: left top;
		transform-origin: left top
	}
	
	.orgchart .verticalNodes ul {
		list-style: none;
		margin: 0;
		padding-left: 18px;
		text-align: left
	}
	
	.orgchart .verticalNodes ul:first-child {
		margin-top: 2px
	}
	
	.orgchart .verticalNodes>td:before {
		content: "";
		border: 1px solid rgba(217, 83, 79, .8)
	}
	
	.orgchart .verticalNodes>td>ul>li:first-child:before {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		top: -4px;
		height: 30px;
		width: calc(50% - 2px);
		border-width: 2px 0 0 2px
	}
	
	.orgchart .verticalNodes ul>li {
		position: relative
	}
	
	.orgchart .verticalNodes ul>li:after,
	.orgchart .verticalNodes ul>li:before {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		content: "";
		position: absolute;
		left: -6px;
		border-color: rgba(217, 83, 79, .8);
		border-style: solid;
		border-width: 0 0 2px 2px
	}
	
	.orgchart .verticalNodes ul>li:before {
		top: -4px;
		height: 30px;
		width: 11px
	}
	
	.orgchart .verticalNodes ul>li:after {
		top: 1px;
		height: 100%
	}
	
	.orgchart .verticalNodes ul>li:first-child:after {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		top: 24px;
		width: 11px;
		border-width: 2px 0 0 2px
	}
	
	.orgchart .verticalNodes ul>li:last-child:after {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		border-width: 2px 0 0
	}
	
	.orgchart.r2l {
		position: absolute;
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg);
		-webkit-transform-origin: left top;
		transform-origin: left top
	}
	
	.orgchart>.spinner {
		font-size: 100px;
		margin-top: 30px;
		color: rgba(68, 157, 68, .8)
	}
	
	.orgchart table {
		border-spacing: 0;
		border-collapse: separate
	}
	
	.orgchart>table:first-child {
		margin: 20px auto
	}
	
	.orgchart td {
		text-align: center;
		vertical-align: top;
		padding: 0
	}
	
	.orgchart .lines:nth-child(3) td {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		height: 20px
	}
	
	.orgchart .lines .topLine {
		border-top: 2px solid rgba(217, 83, 79, .8)
	}
	
	.orgchart .lines .rightLine {
		border-right: 1px solid rgba(217, 83, 79, .8);
		float: none;
		border-radius: 0
	}
	
	.orgchart .lines .leftLine {
		border-left: 1px solid rgba(217, 83, 79, .8);
		float: none;
		border-radius: 0
	}
	
	.orgchart .lines .downLine {
		background-color: rgba(217, 83, 79, .8);
		margin: 0 auto;
		height: 20px;
		width: 2px;
		float: none
	}
	
	.orgchart .node {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		display: inline-block;
		position: relative;
		margin: 0;
		padding: 3px;
		border: 2px dashed transparent;
		text-align: center;
		width: 130px
	}
	
	.orgchart.l2r .node,
	.orgchart.r2l .node {
		width: 50px;
		height: 130px
	}
	
	.orgchart .node>.spinner {
		position: absolute;
		top: calc(50% - 15px);
		left: calc(50% - 15px);
		vertical-align: middle;
		font-size: 30px;
		color: rgba(68, 157, 68, .8)
	}
	
	.orgchart .node:hover {
		-webkit-transition: .5s;
		transition: .5s;
		cursor: default;
		z-index: 20
	}
	
	.orgchart .node.focused,
	.orgchart .node:hover {
		background-color: rgba(238, 217, 54, .5)
	}
	
	.orgchart .ghost-node {
		position: fixed;
		left: -10000px;
		top: -10000px
	}
	
	.orgchart .ghost-node rect {
		fill: #fff;
		stroke: #bf0000
	}
	
	.orgchart .node.allowedDrop {
		border-color: rgba(68, 157, 68, .9)
	}
	
	.orgchart .node .title {
		text-align: center;
		font-size: 12px;
		font-weight: 700;
		height: 20px;
		line-height: 20px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		background-color: rgba(217, 83, 79, .8);
		color: #fff;
		border-radius: 4px 4px 0 0
	}
	
	.orgchart.b2t .node .title {
		-webkit-transform: rotate(-180deg);
		transform: rotate(-180deg);
		-webkit-transform-origin: center bottom;
		transform-origin: center bottom
	}
	
	.orgchart.l2r .node .title {
		-webkit-transform: rotate(-90deg) translate(-40px, -40px) rotateY(180deg);
		transform: rotate(-90deg) translate(-40px, -40px) rotateY(180deg);
		-webkit-transform-origin: bottom center;
		transform-origin: bottom center;
		width: 120px
	}
	
	.orgchart.r2l .node .title {
		-webkit-transform: rotate(-90deg) translate(-40px, -40px);
		transform: rotate(-90deg) translate(-40px, -40px);
		-webkit-transform-origin: bottom center;
		transform-origin: bottom center;
		width: 120px
	}
	
	.orgchart .node .title .symbol {
		float: left;
		margin-top: 4px;
		margin-left: 2px
	}
	
	.orgchart .node .content {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		width: 100%;
		height: 20px;
		font-size: 11px;
		line-height: 18px;
		border: 1px solid rgba(217, 83, 79, .8);
		border-radius: 0 0 4px 4px;
		text-align: center;
		background-color: #fff;
		color: #333;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap
	}
	
	.orgchart.b2t .node .content {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		-webkit-transform-origin: center top;
		transform-origin: center top
	}
	
	.orgchart.l2r .node .content {
		-webkit-transform: rotate(-90deg) translate(-40px, -40px) rotateY(180deg);
		transform: rotate(-90deg) translate(-40px, -40px) rotateY(180deg);
		-webkit-transform-origin: top center;
		transform-origin: top center;
		width: 120px
	}
	
	.orgchart.r2l .node .content {
		-webkit-transform: rotate(-90deg) translate(-40px, -40px);
		transform: rotate(-90deg) translate(-40px, -40px);
		-webkit-transform-origin: top center;
		transform-origin: top center;
		width: 120px
	}
	
	.orgchart .node .edge {
		font-size: 15px;
		position: absolute;
		color: rgba(68, 157, 68, .5);
		cursor: default;
		-webkit-transition: .2s;
		transition: .2s
	}
	
	.orgchart.noncollapsable .node .edge {
		display: none
	}
	
	.orgchart .edge:hover {
		color: #449d44;
		cursor: pointer
	}
	
	.orgchart .node .verticalEdge {
		width: calc(100% - 10px);
		width: -moz-calc(100% - 10px);
		left: 5px
	}
	
	.orgchart .node .topEdge {
		top: -4px
	}
	
	.orgchart .node .bottomEdge {
		bottom: -4px
	}
	
	.orgchart .node .horizontalEdge {
		width: 15px;
		height: calc(100% - 10px);
		height: -moz-calc(100% - 10px);
		top: 5px
	}
	
	.orgchart .node .rightEdge {
		right: -4px
	}
	
	.orgchart .node .leftEdge {
		left: -4px
	}
	
	.orgchart .node .horizontalEdge:before {
		position: absolute;
		top: calc(50% - 7px)
	}
	
	.orgchart .node .rightEdge:before {
		right: 3px
	}
	
	.orgchart .node .leftEdge:before {
		left: 3px
	}
	
	.orgchart .node .toggleBtn {
		position: absolute;
		left: 5px;
		bottom: -2px;
		color: rgba(68, 157, 68, .6)
	}
	
	.orgchart .node .toggleBtn:hover {
		color: rgba(68, 157, 68, .8)
	}
	
	.oc-export-btn {
		display: inline-block;
		position: absolute;
		right: 5px;
		top: 5px;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		-ms-touch-action: manipulation;
		touch-action: manipulation;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		color: #fff;
		background-color: #5cb85c;
		border: 1px solid transparent;
		border-color: #4cae4c;
		border-radius: 4px
	}
	
	.oc-export-btn[disabled] {
		cursor: not-allowed;
		-webkit-box-shadow: none;
		box-shadow: none;
		opacity: .3
	}
	
	.oc-export-btn:active,
	.oc-export-btn:focus,
	.oc-export-btn:hover {
		background-color: #449d44;
		border-color: #347a34
	}
	
	.orgchart~.mask {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 999;
		text-align: center;
		background-color: rgba(0, 0, 0, .3)
	}
	
	.orgchart~.mask .spinner {
		position: absolute;
		top: calc(50% - 54px);
		left: calc(50% - 54px);
		color: hsla(0, 0%, 100%, .8);
		font-size: 108px
	}
	
	.orgchart .node {
		-webkit-transition: opacity .3s, -webkit-transform .3s;
		transition: opacity .3s, -webkit-transform .3s;
		transition: transform .3s, opacity .3s;
		transition: transform .3s, opacity .3s, -webkit-transform .3s
	}
	
	.orgchart .slide-down {
		opacity: 0;
		-webkit-transform: translateY(40px);
		transform: translateY(40px)
	}
	
	.orgchart.l2r .node.slide-down,
	.orgchart.r2l .node.slide-down {
		-webkit-transform: translateY(130px);
		transform: translateY(130px)
	}
	
	.orgchart .slide-up {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		transform: translateY(-40px)
	}
	
	.orgchart.l2r .node.slide-up,
	.orgchart.r2l .node.slide-up {
		-webkit-transform: translateY(-130px);
		transform: translateY(-130px)
	}
	
	.orgchart .slide-right {
		opacity: 0;
		-webkit-transform: translateX(130px);
		transform: translateX(130px)
	}
	
	.orgchart.l2r .node.slide-right,
	.orgchart.r2l .node.slide-right {
		-webkit-transform: translateX(40px);
		transform: translateX(40px)
	}
	
	.orgchart .slide-left {
		opacity: 0;
		-webkit-transform: translateX(-130px);
		transform: translateX(-130px)
	}
	
	.orgchart.l2r .node.slide-left,
	.orgchart.r2l .node.slide-left {
		-webkit-transform: translateX(-40px);
		transform: translateX(-40px)
	}
	</style>
	<style type="text/css">
	.text-primary[data-v-02bd4656]:hover {}
	</style>
	<style type="text/css">
	label[data-v-2c971e8a] {
		margin-top: 12px;
	}
	</style>
	<style type="text/css">
	.margin-left-2[data-v-140a405f] {
		margin-left: 4px;
	}
	
	.margin-left-2[data-v-140a405f]:first-child {
		margin-left: 0;
	}
	</style>
	<style type="text/css">
	.margin-left-2[data-v-766c5b23] {
		margin-left: 4px;
	}
	
	.margin-left-2[data-v-766c5b23]:first-child {
		margin-left: 0;
	}
	</style>
	<style type="text/css">
	.dropdown .dropdown-menu[data-v-8c4e629e] {
		width: 350px;
	}
	
	.dropdown .dropdown-menu .note[data-v-8c4e629e] {
		overflow-y: auto;
		max-height: 200px;
	}
	</style>
	<style type="text/css">
	.icon-box[data-v-0d7335e2] {
		width: 90px;
		height: 90px;
	}
	
	.icon-box svg[data-v-0d7335e2] {
		width: 26px;
		height: 26px;
	}
	</style>
	<style type="text/css">
	.user-social-link svg[data-v-7ae14e12] {
		width: 17px;
		height: 17px;
	}
	
	.user-social-link i[data-v-7ae14e12] {
		font-size: 17px;
	}
	</style>
	<style type="text/css">
	.popper {
		width: auto;
		background-color: #fafafa;
		color: #212121;
		text-align: center;
		padding: 2px;
		display: inline-block;
		border-radius: 3px;
		position: absolute;
		font-size: 14px;
		font-weight: normal;
		border: 1px #ebebeb solid;
		z-index: 200000;
		box-shadow: rgb(58, 58, 58) 0 0 6px 0;
	}
	
	.popper .popper__arrow {
		width: 0;
		height: 0;
		border-style: solid;
		position: absolute;
		margin: 5px;
	}
	
	.popper[x-placement^="top"] {
		margin-bottom: 5px;
	}
	
	.popper[x-placement^="top"] .popper__arrow {
		border-width: 5px 5px 0 5px;
		border-color: #fafafa transparent transparent transparent;
		bottom: -5px;
		left: calc(50% - 5px);
		margin-top: 0;
		margin-bottom: 0;
	}
	
	.popper[x-placement^="bottom"] {
		margin-top: 5px;
	}
	
	.popper[x-placement^="bottom"] .popper__arrow {
		border-width: 0 5px 5px 5px;
		border-color: transparent transparent #fafafa transparent;
		top: -5px;
		left: calc(50% - 5px);
		margin-top: 0;
		margin-bottom: 0;
	}
	
	.popper[x-placement^="right"] {
		margin-left: 5px;
	}
	
	.popper[x-placement^="right"] .popper__arrow {
		border-width: 5px 5px 5px 0;
		border-color: transparent #fafafa transparent transparent;
		left: -5px;
		top: calc(50% - 5px);
		margin-left: 0;
		margin-right: 0;
	}
	
	.popper[x-placement^="left"] {
		margin-right: 5px;
	}
	
	.popper[x-placement^="left"] .popper__arrow {
		border-width: 5px 0 5px 5px;
		border-color: transparent transparent transparent #fafafa;
		right: -5px;
		top: calc(50% - 5px);
		margin-left: 0;
		margin-right: 0;
	}
	</style>
	<style type="text/css">
	.popper {
		border: none;
		max-width: 25rem;
		border-radius: 7px;
		text-align: initial;
		box-shadow: var(--default-box-shadow);
		background-color: var(--default-card-bg);
	}
	
	.popper[x-placement^=top] .popper__arrow,
	.popper[x-placement^=bottom] .popper__arrow {
		border-color: var(--default-card-bg);
	}
	
	.popper .popover-header {
		display: none;
	}
	
	.popper .popover-body {
		z-index: 2;
		padding: 0;
		border: none;
	}
	</style>
	<style type="text/css">
	@font-face {
		font-weight: 400;
		font-style: normal;
		font-family: 'Circular-Loom';
		src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
	}
	
	@font-face {
		font-weight: 500;
		font-style: normal;
		font-family: 'Circular-Loom';
		src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
	}
	
	@font-face {
		font-weight: 700;
		font-style: normal;
		font-family: 'Circular-Loom';
		src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
	}
	
	@font-face {
		font-weight: 900;
		font-style: normal;
		font-family: 'Circular-Loom';
		src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
	}
	</style>
</head>

<body>
	<div id="app">
		<div class="container-scroller">
			<div>
				<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
					<div class="navbar-menu-wrapper d-flex align-items-stretch">
						<a href="" class="align-self-center d-lg-none pl-0 navbar-brand"><img src="https://payday.gainhq.com/images/icon.png" alt="logo"></a>
						<div class="d-flex justify-content-between w-100">
							<div class="d-flex justify-content-start">
								<button type="button" class="navbar-toggler align-self-center d-none d-lg-block pl-0"><span title="Collapse sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg></span></button>
								<button type="button" data-toggle="offcanvas" class="navbar-toggler align-self-center d-lg-none pl-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left">
										<line x1="17" y1="10" x2="3" y2="10"></line>
										<line x1="21" y1="6" x2="3" y2="6"></line>
										<line x1="21" y1="14" x2="3" y2="14"></line>
										<line x1="17" y1="18" x2="3" y2="18"></line>
									</svg>
								</button>
							</div>
							<div class="d-flex justify-content-center"></div>
							<div>
								<ul class="navbar-nav navbar-nav-right ml-auto">
									<li class="nav-item">
										<button type="button" class="navbar-toggler align-self-center"><span title="Dark mood"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span></button>
									</li>
									<li class="nav-item d-none d-lg-block">
										<a href="#" title="Fullscreen" class="d-flex align-items-center nav-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
												<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
											</svg>
										</a>
									</li>
									<li class="nav-item dropdown"><a href="#" id="languageDropdown" data-toggle="dropdown" aria-expanded="false" class="d-flex align-items-center nav-link dropdown-toggle">
        EN
    </a>
										<div aria-labelledby="languageDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown language-dropdown">
											<a href="https://payday.gainhq.com/lang/en" class="dropdown-item">
												<div class="d-flex align-items-center justify-content-center">
													<h6 class="mb-0 font-weight-normal">English</h6></div>
											</a>
										</div>
									</li>
									<li class="nav-item dropdown keep-inside-clicks-open">
										<a href="#" id="notificationDropdown" data-toggle="dropdown" class="d-flex align-items-center nav-link count-indicator dropdown-toggle">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
												<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
												<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
											</svg>
											<!---->
										</a>
										<div aria-labelledby="notificationDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown notification-dropdown no-notification-dropdown p-primary">
											<div class="d-flex justify-content-center"><img src="" alt="" class="no-notification-img"></div>
											<p class="text-center font-size-80 m-0 pt-2 pb-0"> </p>
										</div>
									</li> <span class="topbar-divider d-none d-sm-block"></span>
									<li class="nav-item nav-profile dropdown">
										<a id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false" class="d-flex align-items-center nav-link dropdown-toggle mr-0">
											<div class="nav-profile-text">
												<p class="mb-0 text-black text-right"> sachin kumar
													<br> <span class="text-secondary font-size-90 d-block mt-1">
                     Admin
                </span></p>
											</div>
											<div class="avatars-w-40"><img src="https://payday.gainhq.com/images/avatar.png" alt="image" class="rounded-circle">
												<!---->
											</div>
										</a>
										<div aria-labelledby="profileDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown">
											<div class="dropdown-item profile">
												<div class="avatars-w-50"><img src="https://payday.gainhq.com/images/avatar.png" alt="image" class="rounded-circle">
													<!---->
												</div>
												<div class="nav-profile-text font-size-default ml-2">
													<p class="my-0 text-black">sachin kumar</p> <span class="text-secondary font-size-90">App Admin</span></div>
											</div>
											<div class="dropdown-divider"></div>
											<a href="https://payday.gainhq.com/user/my-profile" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-3">
													<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
													<circle cx="12" cy="7" r="4"></circle>
												</svg> My profile </a>
											<a href="https://payday.gainhq.com/user/notifications" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-3">
													<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
													<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
												</svg> Notifications </a>
											<a href="https://payday.gainhq.com/app/settings" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-3">
													<circle cx="12" cy="12" r="3"></circle>
													<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
												</svg> Settings </a>
											<a href="https://payday.gainhq.com/admin/log-out" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-3">
													<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
													<polyline points="16 17 21 12 16 7"></polyline>
													<line x1="21" y1="12" x2="9" y2="12"></line>
												</svg> Log out </a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
				<!---->
			</div>
			<nav id="sidebar" class="sidebar sidebar-offcanvas">
				<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
					<a href="https://payday.gainhq.com" class="navbar-brand brand-logo"></a>
					<a href="https://payday.gainhq.com" class="navbar-brand brand-logo-mini"><img src="https://payday.gainhq.com/images/icon.png" alt="logo"></a>
				</div>
				<ul class="nav nav-scrolling">
					<li class="nav-item"><a href="https://payday.gainhq.com/dashboard" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart menu-icon"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span> <span class="menu-title">Dashboard</span> <!----></a>
						<!---->
					</li>
					<li class="nav-item"><a href="https://payday.gainhq.com/employees/1/profile" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user menu-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <span class="menu-title">Job Desk</span> <!----></a>
						<!---->
					</li>
					<li class="nav-item"><a href="#employee" data-toggle="collapse" aria-expanded="false" aria-controls="employee" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users menu-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span> <span class="menu-title">Employee</span> <i class="menu-arrow"></i></a>
						<div id="employee" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/lists" class="nav-link">
              All Employees
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/designations" class="nav-link">
              Designation
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/employment-statuses" class="nav-link">
              Employment Status
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#leave" data-toggle="collapse" aria-expanded="false" aria-controls="leave" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock menu-icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span> <span class="menu-title">Leave</span> <i class="menu-arrow"></i></a>
						<div id="leave" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/status" class="nav-link">
              Leave Status
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/requests" class="nav-link">
              Leave Request
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/calendar" class="nav-link">
              Calendar
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/summaries" class="nav-link">
              Summary
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#attendance_menu" data-toggle="collapse" aria-expanded="false" aria-controls="attendance_menu" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar menu-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></span> <span class="menu-title">Attendance</span> <i class="menu-arrow"></i></a>
						<div id="attendance_menu" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/lists" class="nav-link">
              Daily Log
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/requests" class="nav-link">
              Attendance Request
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/details" class="nav-link">
              Attendance Details
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/summaries" class="nav-link">
              Summary
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#payroll_menu" data-toggle="collapse" aria-expanded="false" aria-controls="payroll_menu" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card menu-icon"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></span> <span class="menu-title">Payroll</span> <i class="menu-arrow"></i></a>
						<div id="payroll_menu" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/payrun" class="nav-link">
              Payrun
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/payslip" class="nav-link">
              Payslip
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/summery" class="nav-link">
              Summary
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/beneficiary-badges" class="nav-link">
              Beneficiary badge
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item active"><a href="#administration" data-toggle="collapse" aria-expanded="false" aria-controls="administration" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase menu-icon"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></span> <span class="menu-title">Administration</span> <i class="menu-arrow"></i></a>
						<div id="administration" class="collapse show">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/users" class="nav-link">
              Users &amp; Roles
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/work-shifts" class="nav-link">
              Work Shifts
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/departments" class="nav-link">
              Departments
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/holidays" class="nav-link active">
              Holiday
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/org-structure" class="nav-link">
              Org. Structure
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#tenant-settings" data-toggle="collapse" aria-expanded="false" aria-controls="tenant-settings" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings menu-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span> <span class="menu-title">Settings</span> <i class="menu-arrow"></i></a>
						<div id="tenant-settings" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/app/settings" class="nav-link">
              App Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/leave-settings" class="nav-link">
              Leave Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/attendance" class="nav-link">
              Attendance Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/payroll-settings" class="nav-link">
              Payroll Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/import" class="nav-link">
              Import
            </a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<div class="container-fluid page-body-wrapper">
				<div class="main-panel">
					<div class="content-wrapper">
						<div data-v-76b88b86="" class="row">
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<nav data-v-76b88b86="" aria-label="breadcrumb">
									<ol class="breadcrumb p-0 d-flex align-items-center mb-primary">
										<li class="breadcrumb-item page-header d-flex align-items-center">
											<h4 class="mb-0">Holiday</h4></li>
										<!---->
										<!---->
									</ol>
								</nav>
							</div>
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<div data-v-76b88b86="" class="float-md-right mb-3 mb-sm-3 mb-md-0">
									<button data-v-6f2921d8="" class="btn btn-primary" data-v-76b88b86=""> Add Holiday </button>
								</div>
							</div>
						</div>
						<div>
							<div class="d-flex justify-content-between">
								<div class="d-flex justify-content-start">
									<div class="filters-wrapper d-flex justify-content-start flex-wrap">
										<!---->
										<div class="single-filter">
											<button type="button" class="btn btn-filter btn-list-grid">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
													<line x1="21" y1="10" x2="3" y2="10"></line>
													<line x1="21" y1="6" x2="3" y2="6"></line>
													<line x1="21" y1="14" x2="3" y2="14"></line>
													<line x1="21" y1="18" x2="3" y2="18"></line>
												</svg>
											</button>
										</div>
										<button type="button" class="btn d-block d-sm-none btn-toggle-filters">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter">
												<polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
											</svg> Filters </button> <span class="mobile-filters-wrapper"><div class="filters-loop-wrapper"><!----> <!----> <!----> <!----> <!----> <!----> <div class="single-filter multi-select-filter search-filter-dropdown"><div class="dropdown dropdown-with-animation chips-dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Department
            <!----></a> <div aria-labelledby="dropdownMenuLink" class="dropdown-menu py-0"><div class="btn-dropdown-close d-sm-none"><span class="title">
                        Department
                    </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
									<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
										<input type="text" placeholder="Search" autofocus="autofocus" class="form-control">
									</div>
									<div class="dropdown-divider my-0"></div>
									<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Main Department
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Admin &amp; HRM
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Accounts
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Development
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Software
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    UI &amp; UX
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a></div>
								</div>
							</div>
						</div>
						<!---->
						<!---->
						<!---->
						<!---->
						<div class="single-filter calendar-root">
							<div class="input-date"><span class="mr-2">
            Time period
        </span>
								<!---->
								<!---->
							</div>
							<!---->
						</div>
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
					</div>
					<button type="button" class="btn btn-primary btn-with-shadow d-sm-none btn-close-filter-wrapper d-flex justify-content-center align-items-center"> Close </button>
					</span>
				</div>
			</div>
			<div>
				<div class="mr-0 single-filter single-search-wrapper">
					<div class="form-group form-group-with-search d-flex align-items-center"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
						<input type="text" placeholder="Search" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="h-100">
			<div class="card border-0 bg-transparent">
				<div class="card-body p-0">
					<div class="datatable">
						<!---->
						<!---->
						<!---->
						<div class="position-relative" style="min-height: 400px;">
							<div id="holiday-table">
								<div class="card card-with-shadow border-0" style="min-height: 400px;">
									<div class="card-body p-primary">
										<div class="calendar-view">
											<div data-fc-render-id="0" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
												<div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
													<div class="fc-toolbar-chunk">
														<h2 class="fc-toolbar-title">November 2021</h2></div>
													<div class="fc-toolbar-chunk">
														<button class="fc-prev-button fc-button fc-button-primary" type="button" aria-label="prev"><span class="fc-icon fc-icon-chevron-left"></span></button>
														<button disabled="" class="fc-today-button fc-button fc-button-primary" type="button">today</button>
														<button class="fc-next-button fc-button fc-button-primary" type="button" aria-label="next"><span class="fc-icon fc-icon-chevron-right"></span></button>
													</div>
													<div class="fc-toolbar-chunk"></div>
												</div>
												<div class="fc-view-harness fc-view-harness-active" style="height: 872.593px;">
													<div class="fc-daygrid fc-dayGridMonth-view fc-view">
														<table class="fc-scrollgrid  fc-scrollgrid-liquid">
															<thead>
																<tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
																	<td>
																		<div class="fc-scroller-harness">
																			<div class="fc-scroller" style="overflow: hidden;">
																				<table class="fc-col-header " style="width: 1176px;">
																					<colgroup></colgroup>
																					<tbody>
																						<tr>
																							<th class="fc-col-header-cell fc-day fc-day-sun">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sun</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-mon">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Mon</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-tue">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Tue</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-wed">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Wed</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-thu">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Thu</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-fri">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Fri</a></div>
																							</th>
																							<th class="fc-col-header-cell fc-day fc-day-sat">
																								<div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sat</a></div>
																							</th>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</td>
																</tr>
															</thead>
															<tbody>
																<tr class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
																	<td>
																		<div class="fc-scroller-harness fc-scroller-harness-liquid">
																			<div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;">
																				<div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 1176px;">
																					<table class="fc-scrollgrid-sync-table" style="width: 1176px; height: 828px;">
																						<colgroup></colgroup>
																						<tbody>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2021-10-31">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">31</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2021-11-01">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">1</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-today " data-date="2021-11-02">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">2</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2021-11-03">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">3</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2021-11-04">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">4</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2021-11-05">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">5</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2021-11-06">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">6</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2021-11-07">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">7</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2021-11-08">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">8</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2021-11-09">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">9</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2021-11-10">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">10</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2021-11-11">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">11</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2021-11-12">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">12</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2021-11-13">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">13</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2021-11-14">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">14</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2021-11-15">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">15</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2021-11-16">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">16</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2021-11-17">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">17</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2021-11-18">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">18</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2021-11-19">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">19</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2021-11-20">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">20</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2021-11-21">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">21</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2021-11-22">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">22</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2021-11-23">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">23</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2021-11-24">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">24</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2021-11-25">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">25</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2021-11-26">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">26</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2021-11-27">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">27</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2021-11-28">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">28</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2021-11-29">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">29</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2021-11-30">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">30</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2021-12-01">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">1</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2021-12-02">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">2</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2021-12-03">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">3</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2021-12-04">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">4</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																							<tr>
																								<td class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other" data-date="2021-12-05">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">5</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other" data-date="2021-12-06">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">6</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other" data-date="2021-12-07">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">7</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2021-12-08">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">8</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2021-12-09">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">9</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2021-12-10">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">10</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																								<td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2021-12-11">
																									<div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
																										<div class="fc-daygrid-day-top"><a class="fc-daygrid-day-number">11</a></div>
																										<div class="fc-daygrid-day-events">
																											<div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
																										</div>
																										<div class="fc-daygrid-day-bg"></div>
																									</div>
																								</td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!---->
							</div>
							<!---->
						</div>
						<div class="mt-primary">
							<div>
								<div class="d-flex flex-column flex-md-row justify-content-between">
									<!---->
									<nav style="display: none;">
										<ul class="pagination justify-content-center justify-content-md-end mb-0">
											<li class="page-item disabled">
												<a href="#" aria-label="Previous" class="page-link border-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
														<line x1="19" y1="12" x2="5" y2="12"></line>
														<polyline points="12 19 5 12 12 5"></polyline>
													</svg>
												</a>
											</li>
											<li class="page-item"><a href="#" class="page-link border-0 active disabled">1</a></li>
											<li class="page-item disabled">
												<a href="#" aria-label="Next" class="page-link border-0 align-content-center">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right menu-arrow">
														<line x1="5" y1="12" x2="19" y2="12"></line>
														<polyline points="12 5 19 12 12 19"></polyline>
													</svg>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!---->
	<!---->
	</div>
	</div>
	</div>
	
	</div>
	</div>
	<script>
	window.localStorage.setItem('permissions', JSON.stringify({
		"is_app_admin": true
	}))
	window.onload = function() {
		window.scroll({
			top: 0,
			left: 0,
			behavior: 'smooth'
		})
	}
	</script>
	<script>
	window.localStorage.setItem('app-language', 'en');
	window.localStorage.setItem('app-languages', JSON.stringify({
		"created_response": ":name has been created successfully",
		"updated_response": ":name has been updated successfully",
		"deleted_response": ":name has been deleted successfully",
		"failed_response": "Something went wrong",
		"notified": ":name has been notified successfully",
		"duplicated_response": ":name has been duplicated successfully",
		"status_updated_response": ":name status has been changed to :status",
		"action_not_allowed": "You are not allowed for this action",
		"cant_delete_own_account": "You can't delete your own account",
		"attached_response": ":name has been attached successfully",
		"detached_response": ":name has been detached successfully",
		"default_delete": "You can not delete the default :name .",
		"default_update": "You can not update the default :name",
		"old_password_is_in_correct": "Old password is incorrect",
		"attach_log": "New :pivot attached to :model",
		"detach_log": ":pivot detached from :model",
		"status_log": ":model has been :status",
		"incorrect_user_password": "Incorrect user or password",
		"invite_user_response": "User has been invited successfully",
		"invalid_token": "The token is Invalid",
		"user_account_confirmed": "Your account has been confirmed successfully",
		"user_invited_to_join": "An user has been invited to join",
		"user_confirm_joining": "User confirmed his joining",
		"log_description_message": ":model has been :event",
		"password_reset_mail_has_been_sent_successfully": "We sent an email containing password reset link to your email address. Please check it",
		"no_user_found_on_that_email": "No user found of that email address.",
		"password_has_been_reset_successfully": "Your password has been reset successfully",
		"resource_not_found": "The :resource you are looking for is not found.",
		"created": "Created",
		"deleted": "Deleted",
		"updated": "updated",
		"resource": "resource",
		"this_resource_already_referenced_message": "this content have relations with others table",
		"0": "ZERO (0)",
		"1": "Success",
		"2": "TWO (2)",
		"3": "Bad Request",
		"4": "Unauthorized",
		"5": "Forbidden",
		"6": "Not Found",
		"7": "Payload too large",
		"8": "URI Too long",
		"9": "Unsupported Media Type",
		"10": "Upgrade Required",
		"11": "Too Many Requests",
		"custom_field": "Custom Field",
		"custom_fields": "Custom Fields",
		"custom_field_type": "Custom field type",
		"validation.required": ":attribute",
		"audience_type": "audience(roles\/users)",
		"the_notification_channel_field_is_required": "The notification channel field is required.",
		"text": "Textbox",
		"textarea": "Textarea",
		"checkbox": "Checkbox",
		"radio_button": "Radio Button",
		"select": "Select",
		"multi_select": "Multi Select",
		"radio": "Radio",
		"did_not_match_anything": "Didn't match anything",
		"enter_to_add_new": "Enter to add new",
		"no_options_found": "No options found",
		"pick_a_color": "Pick a color",
		"job_desk": "Job Desk",
		"notification_events": "Notification Events",
		"notification_event_name": ":name :action",
		"notification_created": "created",
		"notification_updated": "updated",
		"notification_deleted": "deleted",
		"notification_user": "user",
		"notification_reset": "reset",
		"notification_invitation": "invitation",
		"notification_joined": "joined",
		"notification_activated": "activated",
		"notification_deactivated": "deactivated",
		"notification_": " ",
		"password-reset": "Password reset",
		"notification_canceled": "canceled",
		"notification_requested": "requested",
		"notification_rejected": "rejected",
		"notification_approved": "approved",
		"notification_bypassed": "bypassed",
		"notification_assigned": "assigned",
		"notification_terminated": "terminated",
		"notification_termination": "termination",
		"notification_increment": "increment",
		"notification_generate": "generate",
		"employee_password": "Employee password",
		"notification": "Notification",
		"notify_by_email": "Notify by Email",
		"notify_by_sms": "Notify by SMS",
		"notification_settings": "Notification settings",
		"notification_template": "Notification template",
		"mark_all_as_read": "Mark all as read",
		"see_all": "See all",
		"notification_has_cleared_from_list": "Notification has cleared from list.",
		"age": "Age",
		"show": "Show",
		"hide": "Hide",
		"user": "User",
		"brand": "Brand",
		"status": "Status",
		"name": "Name",
		"email": "Email",
		"mail": "Mail",
		"value": "Value",
		"type": "Type",
		"database": "System",
		"sms": "SMS",
		"users": "Users",
		"roles": "Roles",
		"role": "Role",
		"permissions": "Permissions",
		"permission": "Permission",
		"settings": "Settings",
		"password": "Password",
		"show_password": "Show password",
		"hide_password": "Hide password",
		"allowed": "allowed",
		"profile_picture": "Profile picture",
		"delivery_settings": "Email settings",
		"brand_settings": "Brand settings",
		"privacy_settings": "Privacy settings",
		"corn_job": "Corn job",
		"brand_group": "Brand group",
		"template": "Template",
		"profile": "Profile",
		"log": "Log",
		"invite": "Invite",
		"dashboard": "Dashboard",
		"log_out": "Log out",
		"my_profile": "My profile",
		"notifications": "Notifications",
		"contents": "Contents",
		"update": "Update",
		"edit": "Edit",
		"delete": "Delete",
		"cancel": "Cancel",
		"save": "Save",
		"personal_info": "Personal Details",
		"first_name": "First name",
		"last_name": "Last name",
		"gender": "Gender",
		"date_of_birth": "Date of birth",
		"contact": "Contact",
		"address": "Address",
		"not_added_yet": "Not added yet",
		"male": "Male",
		"female": "Female",
		"password_requirements_message": "The password should contain one upper case, one lower case, one special character, and numbers. It should be a minimum of 8 characters.",
		"new": "New",
		"old": "Old",
		"confirm": "Confirm",
		"old_password": "Old password",
		"notification_setting": "Notification setting",
		"confirm_your_account": "Confirm your account.",
		"reason_note": "Reason note",
		"add_reason_note_here": "Add reason note here",
		"add_response_note_here": "Add response note here",
		"attachments": "Attachments",
		"enter_date": "Enter date",
		"enter_start_date": "Enter start date",
		"enter_start_time": "Enter start time",
		"enter_end_date": "Enter end date",
		"enter_end_time": "Enter end time",
		"date_and_time": "Date & time",
		"activity": "Activity",
		"view_as_employee": "View As Employee",
		"view_as_admin": "View As Admin",
		"view_as_manager": "View As Manager",
		"change_password": "Change Password",
		"app_name": "App Name",
		"brand_name": "Brand Name",
		"status_active": "Active",
		"status_pending": "Pending",
		"status_deleted": "Deleted",
		"status_processing": "Processing",
		"status_sent": "Sent",
		"status_draft": "Draft",
		"status_regular": "Regular",
		"status_auto": "Auto",
		"status_dynamic": "Dynamic",
		"status_imported": "Imported",
		"status_black-listed": "Black listed",
		"status_inactive": "Inactive",
		"status_invited": "Invited",
		"status_approve": "Approve",
		"status_approved": "Approved",
		"status_reject": "Reject",
		"status_rejected": "Rejected",
		"status_canceled": "Canceled",
		"status_bypassed": "Bypassed",
		"status_generated": "Generated",
		"status_partially": "Partially sent",
		"you_are_going_to_approve_this_leave_request": "You are going to approve this leave request",
		"you_are_going_to_reject_this_leave_request": "You are going to reject this leave request",
		"you_are_going_to_cancel_this_leave_request": "You are going to cancel this leave request",
		"you_have_been_terminated": "You have been terminated!",
		"manage_dashboard": "Can manage app dashboard",
		"view_users": "Can view list of user",
		"create_users": "Can create an user",
		"update_users": "Can update an user",
		"delete_users": "Can delete an user",
		"view_brands": "Can view list of brand",
		"create_brands": "Can create brand",
		"update_brands": "Can update brand",
		"delete_brands": "Can delete brand",
		"user_list_brands": "Can view users of a brand",
		"attach_users_brands": "Can attach user to brand",
		"detach_users_brands": "Can detach user from a brand",
		"brand_list_users": "Can view brands of a user",
		"manage_brand_dashboard": "Can view brand dashboard",
		"update_brand_privacy_settings": "Can update brand privacy from app",
		"view_brand_privacy_settings": "Can view brand privacy from app",
		"view_roles": "Can view list of role",
		"create_roles": "Can create role",
		"update_roles": "Can update role",
		"delete_roles": "Can delete role",
		"view_settings": "Can view list of setting",
		"update_settings": "Can update setting",
		"view_permission": "Can view list of permission",
		"view_custom_fields": "Can view list of custom field",
		"create_custom_fields": "Can create custom field",
		"update_custom_fields": "Can update custom field",
		"delete_custom_fields": "Can delete custom field",
		"attach_roles_users": "Can attach roles to users",
		"detach_roles_users": "Can detach roles from users",
		"attach_permissions_roles": "Can attach permissions to role",
		"detach_permissions_roles": "Can detach permissions from role",
		"change_settings_users": "Can change own settings",
		"settings_list_users": "Can view settings list",
		"change_password_users": "Can change user password",
		"change_profile_picture_users": "Can change profile picture",
		"update_delivery_settings": "Can update email settings",
		"update_corn_job_settings": "Can update corn job settings",
		"view_corn_job_settings": "Can view corn job settings",
		"view_delivery_settings": "Can view email settings",
		"view_brand_delivery_settings": "Can view brand email settings",
		"view_notification_settings": "Can view notification settings",
		"update_notification_settings": "Can update notification settings",
		"create_brand_groups": "Can create brand group",
		"view_brand_groups": "Can view brand group",
		"update_brand_groups": "Can update brand group",
		"delete_brand_groups": "Can delete brand group",
		"attach_brand_brand_groups": "Can attach brand to brand group",
		"detach_brand_brand_groups": "Can detach brand from brand group",
		"view_brands_brand_groups": "Can view brands of a brand group",
		"view_notification_templates": "Can view notification templates",
		"create_notification_templates": "Can create notification templates",
		"update_notification_templates": "Can update notification templates",
		"delete_notification_templates": "Can delete notification templates",
		"attach_templates_notification_events": "Can attach templates to notification event",
		"detach_templates_notification_events": "Can detach templates to notification event",
		"view_activity_logs": "Can view activity log",
		"view_templates": "Can view templates",
		"create_templates": "Can create templates",
		"update_templates": "Can update templates",
		"delete_templates": "Can delete templates",
		"invite_user": "Can invite user",
		"create_employment_statuses": "Can create employment status",
		"view_employment_statuses": "Can view employment status",
		"update_employment_statuses": "Can update employment status",
		"delete_employment_statuses": "Can delete employment status",
		"create_designations": "Can create designation",
		"view_designations": "Can view designation",
		"update_designations": "Can update designation",
		"delete_designations": "Can delete designation",
		"cancel_user_invitation": "Can cancel user invitation",
		"update_departments_status": "Can update department status",
		"view_organization_chart": "Can view organization chart",
		"create_working_shifts": "Can create working shift",
		"view_working_shifts": "Can view working shift",
		"update_working_shifts": "Can update working shift",
		"delete_working_shifts": "Can delete working shift",
		"add_employees_to_working_shift": "Can add employees to work shift",
		"view_all_departments_holidays": "Can view all departments holidays",
		"create_holidays": "Can create holiday",
		"update_holidays": "Can update holidays",
		"view_holidays": "Can view holidays",
		"delete_holidays": "Can delete holidays",
		"view_employees": "Can view employees",
		"update_employees": "Can update employees",
		"delete_employees": "Can delete employees",
		"invite_employees": "Can invite employees",
		"terminate_employees": "Can terminate employees",
		"rejoin_employees": "Can re-join employees",
		"add_user_to_employees": "Can add user to employee",
		"remove_user_from_employees": "Can remove user from employees",
		"cancel_employee_invitation": "Can cancel employee invitations",
		"view_employee_address": "Can view employee address",
		"update_employee_address": "Can update employee address",
		"delete_employee_address": "Can delete employee address",
		"view_employee_emergency_contacts": "Can view employee emergency contacts",
		"create_employee_emergency_contacts": "Can create employee emergency contacts",
		"update_employee_emergency_contacts": "Can update employee emergency contacts",
		"delete_employee_emergency_contacts": "Can delete employee emergency contacts",
		"view_employee_social_links": "Can view employee social links",
		"update_employee_social_links": "Can update employee social links",
		"view_attendances_details": "Can view attendance details",
		"move_department_employees": "Can move department employees",
		"view_department_user": "Can view department users",
		"update_employees_profile": "Can update employee personal details",
		"view_attendance_requests": "Can view attendance request",
		"create_attendances": "Can add employees attendance",
		"update_attendance_notes": "Can update own attendance notes",
		"update_attendance_details_status": "Can update attendance status",
		"send_attendance_request": "Can send attendance request",
		"update_attendance_status": "Can update attendance status",
		"create_leave_periods": "Can create leave period",
		"view_leave_periods": "Can view leave period",
		"update_leave_periods": "Can update leave period",
		"delete_leave_periods": "Can delete leave period",
		"view_attendance_summary": "Can view attendance summary",
		"attendance_change_log": "Can view change log",
		"update_attendances": "Can update attendance",
		"attendances_daily_log": "Can view attendance daily log",
		"update_attendance_settings": "Can update attendance settings",
		"view_attendance_settings": "Can view attendance settings",
		"view_all_attendance": "Can view all attendance (If you set this permission to true any user with this role can access all attendances from any list.)",
		"update_employee_leave_amount": "Can update employee leave amount",
		"manage_leave_allowance_policy": "Can manage leave allowance policy",
		"view_leave_calendar": "Can view leave calender",
		"update_employee_job_history": "Can update employee job history",
		"view_job_history": "Can view job history",
		"create_leave_request": "Can send leave request",
		"approve_attendance": "can approve attendance",
		"reject_attendance": "Can reject attendance",
		"cancel_attendance": "Can cancel attendance request",
		"view_leave_status_summary": "Can view leave status",
		"view_leave_data_table": "Can view leave data table",
		"update_leave_settings": "Can update leave settings",
		"view_leave_status": "Can view leave status",
		"update_monthly_earning": "Can update monthly earning",
		"view_leave_settings": "Can view leave settings",
		"manage_cancel_leave": "Can cancel own leave request",
		"manage_bypass_leave": "Can bypass leave request",
		"manage_approve_leave": "Can approve leave request",
		"manage_reject_leave": "Can reject leave request",
		"create_leave_types": "Can create leave types",
		"view_leave_types": "Can view leave types",
		"update_leave_types": "Can update leave types",
		"delete_leave_types": "Can delete leave types",
		"view_leave_summaries": "Can view leave summaries",
		"view_leave_requests": "Can view leave requests",
		"update_leave_notes": "Can update own leave notes",
		"assign_leaves": "Can assign leaves",
		"view_all_leaves": "Can view all leaves",
		"date_format": "date format",
		"time_format": "time format",
		"decimal_separator": "decimal separator",
		"thousand_separator": "thousand separator",
		"number_of_decimal": "number of decimal",
		"currency_position": "currency position",
		"check_for_updates": "Can check for updates",
		"update_app": "Can update app",
		"view_salary": "Can view salary",
		"update_salary": "Can update salary",
		"view_payroll_settings": "Can view payroll settings",
		"view_beneficiaries": "Can view beneficiary badges",
		"edit_beneficiaries": "Can edit beneficiary badges",
		"update_beneficiaries": "Can update beneficiary badges",
		"delete_beneficiaries": "Can delete beneficiary badges",
		"create_beneficiaries": "Can create beneficiary badges",
		"view_payslips": "Can view payslip",
		"delete_payslip": "Can delete payslip",
		"update_payslip": "Can update payslip",
		"view_payslip_pdf": "Can view and download payslip pdf",
		"send_bulk_payslip": "Can send bulk payslip",
		"run_default_payrun": "Can run default payrun",
		"run_manual_payrun": "Can run manual payrun",
		"view_payruns": "Can view payruns",
		"update_payruns": "Can update payruns",
		"delete_payruns": "Can delete payruns",
		"send_payrun_payslips": "Can send payrun payslips",
		"view_payroll_summery": "Can view payroll summery",
		"view_default_payrun": "Can view default payrun",
		"update_payrun_audience": "Can update payrun audience setting",
		"update_payrun_beneficiary": "Can update payrun beneficiary setting",
		"update_payrun_period": "Can update payrun period setting",
		"send_individual_payslip": "Can send individual payslip",
		"edit_payslip": "Can edit payslip",
		"manage_payslip_confliction": "Can manage payslip confliction",
		"update_employee_payrun": "Can update employee payrun",
		"update_employee_beneficiary": "Can update employee beneficiary",
		"import_employees": "Can import employees",
		"field_label": "{subject} {key}",
		"textarea_placeholder": "Add {name} here",
		"all_feature_name": "All {name}",
		"add_feature_name": "Add {name}",
		"edit_feature_name": "Edit {name}",
		"copy_feature_name": "Copy {name}",
		"field_title": "{subject} {infix} {title}",
		"place_holder": "Enter {subject} {type}",
		"title": "Title",
		"notification_form": "Notification form",
		"time": "Time",
		"event": "Event",
		"templates": "Templates",
		"email_setup": "Email setup",
		"smtp": "SMTP",
		"amazon_ses": "Amazon SES",
		"mailgun": "Mailgun",
		"mandrill": "Mandrill",
		"postmark": "Postmark",
		"sparkpost": "Sparkpost",
		"sendmail": "Sendmail",
		"path": "Path",
		" ": "Space",
		"provider": "Provider",
		"secret": "Secret",
		"domain_name": "Domain name",
		"api_key": "API key",
		"from": "From",
		"host": "Host",
		"port": "Port",
		"encryption": "Encryption",
		"api_region": "API region",
		"access_key_id": "Access key",
		"secret_access_key": "Secret access key",
		"token": "Token",
		"user_invitation": "User invitation",
		"paid": "Paid",
		"unpaid": "Unpaid",
		"un_paid": "Un paid",
		"amount": "Amount",
		"special_percentage": "Special percentage",
		"special": "Special",
		"start_date": "Start date",
		"end_date": "End date",
		"smtp_encryption": "SMTP encryption",
		"smtp_password": "SMTP password",
		"smtp_user_name": "SMTP username",
		"smtp_port": "SMTP port",
		"smtp_host": "SMTP host",
		"default_mail": "Default mail",
		"from_name": "From name",
		"en": "English",
		"dd-mm-yyyy": "DD-MM-YYYY",
		"d-m-Y": "DD-MM-YYYY",
		"m-d-Y": "MM-DD-YYYY",
		"Y-m-d": "YYYY-MM-DD",
		"m\/d\/Y": "MM\/DD\/YYYY",
		"d\/m\/Y": "DD\/MM\/YYYY",
		"Y\/m\/d": "YYYY\/MM\/DD",
		"m.d.Y": "MM.DD.YYYY",
		"d.m.Y": "DD.MM.YYYY",
		"Y.m.d": "YYYY.MM.DD",
		"h": "12 HOURS",
		"H": "24 HOURS",
		".": "DOT(.)",
		",": "COMMA(,)",
		"prefix_only": "$1,100.00",
		"prefix_with_space": "$ 1,100.00",
		"suffix_only": "1,100.00$",
		"suffix_with_space": "1,100.00 $",
		"format_prefix_only": "{symbol}{amount}",
		"format_prefix_with_space": "{symbol} {amount}",
		"format_suffix_only": "{amount}{symbol}",
		"format_suffix_with_space": "{amount} {symbol}",
		"like_prefix_only": ":symbol:amount",
		"like_prefix_with_space": ":symbol :amount",
		"like_suffix_only": ":amount:symbol",
		"like_suffix_with_space": ":amount :symbol",
		"is_required": "is required",
		"and": "and",
		"this_field_is_required": "This field is required",
		"this_field_is_invalid": "This field is invalid",
		"this_field_is_not_alphanumeric": "This field is not alphanumeric",
		"passwords_are_not_matched": "Passwords are not matched",
		"please_enter_a_strong_password": "Please enter a strong password.",
		"are_not_match": "are not match",
		"can_not_before": "can not before",
		"is_invalid": "is invalid",
		"minimum_length_is": "Minimum length is",
		"maximum_length_is": "Maximum length is",
		"maximum_number_is": "Maximum number is",
		"minimum_number_is": "Minimum number is",
		"is_not_alphanumeric": "is not alphanumeric",
		"not_found": "Not found",
		"you_are_going_to_cancel_an_invitation": "You are going to cancel an invitation.",
		"hands_up": "Hand's Up!",
		"you_are_going_to_delete_message": "You are going to delete {resource}",
		"action": "Action",
		"load_more": "Load more",
		"apply": "Apply",
		"clear": "Clear",
		"close": "Close",
		"yes": "Yes",
		"no": "No",
		"more": "more",
		"actions": "Actions",
		"context": "Context",
		"choose_multi_field": "Choose {field}",
		"choose_field": "Choose a {field}",
		"select_field": "Select a {field}",
		"options": "Options",
		"cancel_invitation": "Cancel Invitation",
		"remove_link": "Remove link",
		"add": "Add",
		"items_showing_per_page": "Items showing per page",
		"items_selected": "items selected",
		"select_all": "Select all",
		"clear_selection": "Clear selection",
		"showing": "Showing",
		"to": "to",
		"items": "items",
		"of": "of",
		"filters": "Filters",
		"minimum_rate": "Minimum rate",
		"maximum_rate": "Maximum rate",
		"want_to_manage_datatable": "Want to manage datatable?",
		"please_drag_and_drop_your_column_to_reorder_your_table_and_enable_see_option_as_you_want": "Please drag and drop your column to reorder your table and enable see option as you want.",
		"manage_columns": "Manage Columns",
		"search": "Search",
		"today": "Today",
		"date": "Date",
		"select_an_option": "Select an option",
		"clear_all_filters": "Clear all filters",
		"sort_by": "Sort by",
		"can_not_fetch_data": "Can not fetch data",
		"are_you_sure": "Are you sure?",
		"this_content_will_be_deleted_permanently": "This content will be deleted permanently.",
		"nothing_to_show_here": "Nothing to show here",
		"thank_you": "Thank you",
		"go_back_to_your_page": "Go back to your page",
		"something_went_wrong": "Something went wrong!",
		"empty_data_block_dummy_message": "Please add a new entity or manage the data table to see the content here",
		"change_image": "Change Image",
		"choose_file": "Choose File",
		"drag_and_drop": "Drag & Drop",
		"or": "or",
		"browse": "Browse",
		"no_notification_one": "It's very much boring to do as usual stuff, let's have a party with some beer!",
		"no_notification_two": "Are you hungry there? Please have good food and get back to work.",
		"no_notification_three": "Rock & role time! Turn on your music and have some fun with your team.",
		"all_notifications": "All Notifications",
		"collapse_sidebar": "Collapse sidebar",
		"floating_sidebar": "Floating sidebar",
		"full_sidebar": "Full sidebar",
		"light_mood": "Light mood",
		"dark_mood": "Dark mood",
		"fullscreen": "Fullscreen",
		"exit_fullscreen": "Exit fullscreen",
		"hi": "Hi",
		"copyright": "Copyright",
		"login_to_your_dashboard": "Login to your dashboard",
		"login": "Login",
		"your": "Your",
		"forget": "Forget {subject}",
		"reset_password": "Reset Password",
		"back_to": "Back to {destination}",
		"request": "Request",
		"change": "Change",
		"password_must_contains_things": "Password must contains number, lowercase, uppercase and special character",
		"the_user_you_are_looking_for_is_not_found": "The user you are looking for is not found.",
		"invited_by": "Invited by",
		"short_name": "Short name",
		"group": "Group",
		"go_to_dashboard": "Go To Dashboard",
		"user_invitation_canceled_successfully": "User invitation canceled successfully.",
		"am": "AM",
		"pm": "PM",
		"users_roles": "Users & Roles",
		"no_delivery_settings_found": "No email settings found.",
		"no_delivery_settings_warning": "For sending invitation you must set up email settings. Click {location} to add email settings.",
		"no_delivery_settings_warning_none": "For sending invitation you must set up email settings and setup cron job on your hosting server.",
		"no_delivery_settings_warning_on_import": "To import employees you must set up email settings. Click {location} to add email settings.",
		"no_delivery_settings_warning_none_on_import": "To import employees you must set up email settings and setup cron job on your hosting server.",
		"cron_job_settings_warning": "Please make sure you setup the cron job on your hosted server as instructed on the {documentation} for sending emails.",
		"done": "Done",
		"manage": "Manage",
		"de_activate": "De-activate",
		"notification_invited": "invited",
		"app_settings": "App Settings",
		"administration": "Administration",
		"work_shifts": "Work Shifts",
		"departments": "Departments",
		"org_structure": "Org. Structure",
		"attendance_settings": "Attendance Settings",
		"all_attendances": "All Attendances",
		"attendance": "Attendance",
		"attendance_request": "Attendance Request",
		"summery": "Summary",
		"calendar": "Calendar",
		"leave": "Leave",
		"employee": "Employee",
		"all_employee": "All Employee",
		"designation": "Designation",
		"employment_status": "Employment Status",
		"department": "Department",
		"choose": "Choose",
		"class": "Class",
		"purple": "Purple",
		"success": "Success",
		"info": "Info",
		"warning": "Warning",
		"primary": "Primary",
		"danger": "Danger",
		"okay": "Okay",
		"this_will_be_the_badge_of_the_employee": "This will be the badge of the employee",
		"employees_today_entries": "The employee has {length} entries today",
		"wait_a_minute": "Wait a minute!",
		"popup_subtitle_for_redirect_notification_template": "We have some email & notification templates for you. Please have a look on these for customization.",
		"create_departments": "Can create departments",
		"view_departments": "Can view departments",
		"update_departments": "Can update departments",
		"delete_departments": "Can delete departments",
		"attach_users_to_roles": "Can attach users to role",
		"parent_department": "Parent department",
		"location": "Location",
		"description": "Description",
		"no_of_user": "No. of Employees",
		"remember_me": "Remember me",
		"parent_already_exists_warning": "Most parent department already exist. If you want to add new department you have to add it under a department.",
		"move_response": ":subject moved to :location successfully",
		"manager_role_not_found": "Manager role not found",
		"number": "Number",
		"cant_add_child_department_as_parent_department": "You can't add child department as parent department",
		"holiday": "Holiday",
		"description_here": "description here",
		"created_date": "Created date",
		"repeats_annually": "Repeats annually",
		"available_for": "Available for",
		"time_period": "Time period",
		"all": "All",
		"available_for_as_default_to_all": "Available for (As default to all)",
		"you_can_set_the_holiday_only_for_specific_department_by_adding_them": "You can set the holiday only for specific department by adding them.",
		"you_are_going_to_delete_a_holiday": "You are going to delete a holiday.",
		"here": "here",
		"cant_update_holidays": "You can't update previous years expended holidays",
		"cant_update_repeated_holidays": "You can't update repeated holidays",
		"cant_add_holidays_past": "Holiday can not be added on past dates",
		"update_note_this_year_expended_holiday": "You can not update holidays that are already spent",
		"working_shift": "Working shift",
		"start_at": "Start at",
		"end_at": "End at",
		"is_default": "Is default",
		"start_time": "Start time",
		"end_time": "End time",
		"is_week_end": "Is week end",
		"sun": "Sunday",
		"mon": "Monday",
		"tue": "Tuesday",
		"wed": "Wednesday",
		"thu": "Thursday",
		"fri": "Friday",
		"sat": "Saturday",
		"add_employee": "Add employee",
		"work_shift_type": "Work shift type",
		"regular": "Regular",
		"scheduled": "Scheduled",
		"choose_a_working_shift_type": "Choose a working shift type",
		"set_regular_week": "Set Regular Week",
		"set_week_with_fixed_time": "Set week with fixed time",
		"set_scheduled_week": "Set Scheduled Week",
		"set_week_with_customized_time_and_without_time_and_without_time_it_will_be_weekend": "Set week with customized time and without time it will be weekend.",
		"select_your_weekend_days": "Select your weekend day (s)",
		"weekend": "Weekend",
		"you_dont_have_permissions": "You don't have permission to update",
		"view": "View",
		"scheduled_week": "Scheduled week time",
		"regular_week": "Regular week time",
		"working_shift_type": "Working Shift type",
		"weekend_days": "Weekend days",
		"sunday": "Sunday",
		"monday": "Monday",
		"tuesday": "Tuesday",
		"wednesday": "Wednesday",
		"thursday": "Thursday",
		"friday": "Friday",
		"saturday": "Saturday",
		"work_shift": "Work Shift",
		"added_response": ":subject has been added to :object successfully",
		"preview": "Preview",
		"badge_color": "Badge color",
		"color_value": "Color value",
		"all_employees": "All Employees",
		"employee_id": "Employee ID",
		"joining_date": "Joining date",
		"contact_number": "Contact number",
		"view_details": "View details",
		"terminate": "Terminate",
		"re_joining": "Re-joining",
		"invite_employee_response": "Employee has been invited successfully.",
		"salary": "Salary",
		"not_yet_joined": "Not yet joined",
		"default_termination_reason_note": "This is note for termination reason.",
		"enter_employee_termination_reason": "Enter employee termination reason...",
		"enter_employee_rejoining_reason": "Enter employee rejoining reason...",
		"back_to_all_employees": "Back to all employees",
		"add_joining_date": "Add joining date",
		"rejoin": "Rejoin",
		"rejoin_employee": "Rejoin Employee",
		"edit_joining_date": "Edit joining date",
		"add_salary": "Add salary",
		"edit_salary": "Edit salary",
		"employee_salary": "Employee salary",
		"employee_details": "Employee Details",
		"personal_details": "Personal Details",
		"address_details": "Address Details",
		"permanent_address": "Permanent address",
		"current_address": "Current address",
		"emergency_contacts": "Emergency Contacts",
		"you_can_add_multiple_contacts": "You can add multiple contacts",
		"social_links": "Social Links",
		"job_history": "Job History",
		"salary_overview": "Salary Overview",
		"active_log": "Active Log",
		"termination_reason": "Termination reason",
		"about_me": "About me",
		"user_added_to_employee": "User has been added to employee list successfully.",
		"user_removed_from_employee": "User has been removed from employee list successfully",
		"add_attendance": "Add attendance",
		"request_attendance": "Request attendance",
		"salary_and_reviews": "Salary and reviews",
		"you_are_going_to_terminate_an_employee": "You are going to terminate an employee.",
		"you_are_permitting_an_employee_for_re_joining": "You are permitting an employee for re-joining.",
		"you_are_going_to_remove_an_employee_from_list": "You are going to remove an employee from employee list.",
		"confirm_employee_remove": "Confirm Employee Remove",
		"confirm_employee_rejoining": "Confirm Employee Rejoining",
		"all_selected_employee_will_be_removed_from_employee_list": "All selected employee will be removed from employee list!",
		"rejoining": "Rejoining",
		"employee_invitation_canceled_successfully": "Employee invitation has been canceled successfully.",
		"birthday": "Birthday",
		"area": "Area",
		"city": "City",
		"state": "State",
		"zip_code": "Zip code",
		"country": "Country",
		"phone_number": "Phone number",
		"present_address": "Present address",
		"emergency_contact": "Emergency Contact",
		"relationship": "Relationship",
		"not_linked_yet": "Not linked yet",
		"allowance": "Allowance",
		"total_allowance": "Total Allowance",
		"earning_rate": "Earning rate",
		"availability": "Availability",
		"taken": "Taken",
		"earned": "Earned",
		"punch_in": "Punch In",
		"punch_out": "Punch Out",
		"punch_in_note": "Punch In note",
		"punch_out_note": "Punch Out note",
		"punch_in_note_here": "Punch In note here",
		"punch_out_note_here": "Punch Out note here",
		"punch_in_date_and_time": "Punch In date & time:",
		"punched_in_date_and_time": "Punched In date & time:",
		"punch_out_date_and_time": "Punch Out date & time:",
		"not_available": "N\/A",
		"is_manager": "Is manager",
		"activate": "Activate",
		"deactivate": "De-activate",
		"move": "Move",
		"department_manager_role_note": "Want to disallow the employee for \u201cDepartment Manger\u201d responsibility? Then please {edit} the department of the employee and assign another user.",
		"employees": "Employees",
		"add_department": "Add department",
		"department_name": "Department name",
		"move_employee": "Move employee",
		"select_employee": "Select employee",
		"choose_all_employee": "Choose all employee",
		"manager": "Manager",
		"no_employees_found": "No employees found",
		"no_employees_warning": "No employees found in this department",
		"available_departments": "Available department",
		"do_you_want_to_move_employee": "Do you want to move employee?",
		"you_are_going_to_deactivate_a_department": "You are going to deactivate a department.",
		"you_are_going_to_activate_a_department": "You are going to activate a department.",
		"remove_from_employee_list": "Remove from employee list",
		"add_to_employee_list": "Add to employee list",
		"present": "Present",
		"not_yet_added": "Not yet added",
		"you_are_going_to_change_the_department_of_selected_employees": "You are going to change the department of selected employees!",
		"you_are_going_to_change_the_work_shift_of_selected_employees": "You are going to change the work shift of selected employees!",
		"company_info": "Company info",
		"company_name": "Company name",
		"type_your_company_name": "Type your company name",
		"company_logo": "Company logo",
		"change_logo": "Change logo",
		"company_icon": "Company icon",
		"company_banner": "Company banner",
		"change_icon": "Change icon",
		"change_banner": "Change banner",
		"recommended_company_logo_size": "(Recommended size: 210 x 50 px)",
		"recommended_company_icon_size": "(Recommended size: 50 x 50 px)",
		"recommended_company_banner_size": "(Recommended size: 1920 x 1080 px)",
		"language": "Language",
		"date_and_time_setting": "Date and time setting",
		"time_zone": "Time zone",
		"currency_setting": "Currency setting",
		"currency_symbol": "Currency symbol",
		"back_to_multi_tenant": "Back to multi-tenant",
		"activity_log": "Activity Log",
		"do_not_show_in_employee_list": "Do not show in employee list",
		"others": "Others",
		"employee_invitation": "Employee invitation",
		"employee_terminated": "Employee terminated",
		"csrf_token_mismatch_message": "Maybe you are in a frame. Please remove the frame and try again.",
		"attendance_details": "Attendance Details",
		"search_and_select_an_employee": "Search and select an employee",
		"punch_in_date": "Punch in date",
		"punch_in_time": "Punch in date and time",
		"punch_out_date": "Punch out date",
		"punch_out_time": "Punch out date and time",
		"reason_note_for_manual_entry": "Reason note for manual entry",
		"you_must_punch_out_message": "You must punch out to punch in.",
		"conflict_with_previous_attendances": "Conflict with previous attendances.",
		"conflict_with_previous_working_shift_time": "Conflict with previous working shift times.",
		"punched_in_successfully": "Punched in successfully.",
		"punched_out_successfully": "Punched out successfully.",
		"you_dont_punch_in_yet": "You do not punch in yet.",
		"employee_is_punched_in_message": "Employee is punched In in previous date.",
		"employee_field_is_required": "The employee field is required.",
		"punch_in_and_out_time_difference_message": "Punch in and out time difference must be less than 24 hours.",
		"total_approved_hours": "Total approved hours:",
		"in_time": "In time:",
		"out_time": "Out time:",
		"see_rejected": "See rejected",
		"show_rejected_attendances": "Show rejected attendances",
		"filter_data_which_are_rejected": "Filter data table for rejected requests",
		"already_requested_for_update_this_attendance": "Already requested for update this attendance",
		"yesterday": "Yesterday",
		"tomorrow": "Tomorrow",
		"this_week": "This week",
		"last_week": "Last week",
		"next_week": "Next week",
		"this_month": "This month",
		"last_month": "Last month",
		"punched_out": "Punched Out",
		"request_type": "Request type",
		"total_hours": "Total hours",
		"total": "Total",
		"worked": "Worked",
		"balance": "Balance",
		"daily_log": "Daily Log",
		"punched_in": "Punched in",
		"preference": "Preference",
		"definitions": "Definitions",
		"punch_in_time_tolerance": "Punch in time tolerance",
		"auto_approval": "Auto approval",
		"enabled_auto_approval_suggestion": "In the enabled state, all the attendance request would be approved automatically without any reviews. As default, the app considers all employee for approval. Note that its possible to manage employees for auto approval.",
		"disabled_auto_approval_suggestion": "In disabled state all attendance request would be reviewed by the responsible user. The user will get notification for any attendance request.",
		"manage_audience_message": "Add role\/user to whom you don't want review attendance request.",
		"manage_audience": "Manage audience",
		"by_role": "By role",
		"by_user": "By User",
		"choose_all": "Choose all",
		"punch_in_time_tolerance_recommendation": "The adjustment considers the punch in time based on a work shift.",
		"minutes": "Minutes",
		"early": "Early",
		"late": "Late",
		"work_availability_definition": "Work availability definition",
		"percentage": "Percentage",
		"work_availability_definition_recommendation": "The attendance percentage that defines an employee Good or Bad.",
		"good": "Good",
		"bad": "Bad",
		"before_on_time": "Before on time",
		"on_time_tolerance": "On time to tolerance",
		"after_tolerance": "After tolerance",
		"equal_to_or_above_of_percentage": "Equal or above of the percent",
		"bellow_percentage": "Bellow the percent",
		"behavior": "Behavior",
		"not_yet": "Not yet",
		"multi": "Multi",
		"single": "Single",
		"entry": "Entry",
		"auto": "Auto",
		"manual": "Manual",
		"in-note": "In note",
		"out-note": "Out note",
		"attendance_note": "Attendance note",
		"pending": "Pending",
		"entry_date": "Entry Date",
		"request_date": "Request date",
		"approve": "Approve",
		"reject": "Reject",
		"attendance_request_has_been_sent_successfully": "Attendance request has been sent successfully.",
		"out_time_existing_warning": "You cant send attendance request with out time without punch out of your attendance.",
		"already_requested_for_change": "You have already requested for a change on this attendance.",
		"not_approve_for_change_warning": "Request for change can only be made on approved attendance.",
		"change_log": "Change log",
		"note": "Note",
		"you_dont_have_permission_to_login": "You don't have permission to login.",
		"add_note_here": "Add note here",
		"this_work_shift_already_have_attendance": "This work shift can't be :action. It has attendances.",
		"you_are_going_to_cancel_a_attendance": "You are going to cancel a attendance",
		"you_are_going_to_reject_a_attendance": "You are going to reject a attendance",
		"you_are_going_to_approve_this_attendance": "You are going to approve this attendance",
		"incorrect_delivery_credential": "The email configuration you have added is incorrect.",
		"still_pending": "Still pending",
		"last_updated": "Last updated",
		"has_changed": "has changed",
		"has_added": "has added",
		"by": "by",
		"note_for": "Note for",
		"approve_and_close": "Approve & close",
		"reject_and_close": "Reject & close",
		"at_date": "At {date}",
		"action_by": "{action} by",
		"hr": "HR",
		"added": "Added",
		"this_year": "This year",
		"last_year": "Last year",
		"average_behavior": "Average Behaviour",
		"total_active_hour": "Total active hour",
		"total_schedule_hour": "Total schedule hour",
		"total_work_availability": "Total work availability",
		"hour_short_form": "h",
		"lack": "Lack",
		"extra": "Extra",
		"days": "Days",
		"on_leave": "On leave",
		"previous": "Previous",
		"next": "Next",
		"back": "Back",
		"absent": "Absent",
		"attendance_can_not_be_applied_in_different_day": "Attendance can not be applied in different day!",
		"this_workshift_is_read_only_due_to_attendance_history": "This work shift is read only due to attendance history!",
		"view_workshift": "View Workshift",
		"punch_in_only_time": "Punch in time",
		"punch_out_only_time": "Punch out time",
		"good_morning": "Good morning",
		"monthly_time_log": "Monthly time log",
		"you_did_not_punch_in": "You did not punch in yet!",
		"over_time": "Over time",
		"shortage_time": "Shortage time",
		"worked_time": "Worked time",
		"total_schedule_time": "Total schedule time",
		"total_leave_allowance": "Total leave allowance",
		"total_leave_taken": "Total leave taken",
		"total_leave_available": "Total leave available",
		"leave_request_pending": "Leave request pending",
		"total_employee": "Total employee",
		"total_department": "Total department",
		"total_leave_request": "Total leave request",
		"on_leave_today": "On leave today",
		"by_designation": "By Designation",
		"by_department": "By Department",
		"by_employment_status": "By employment status",
		"on_working_today": "On working today",
		"employee_statistics": "Employee statistics",
		"regular_work_shift": "Regular Work Shift",
		"working_shift_details": "Working shift details",
		"change_work_shift": "Change Work-Shift",
		"change_department": "Change Department",
		"confirm_employee_terminate": "Confirm Employee Terminate",
		"is_enabled": "Is enabled",
		"enabled": "Enabled",
		"is_earning_enabled": "Allow monthly earning",
		"you_cant_update_leave_type_if_the_type_already_has_leave_applied": "You cant update leave type if the type already has leave_applied",
		"leave_label": "Leave",
		"leave_availability": "Leave availability",
		"assign_leave": "Assign leave",
		"paid_leave": "Paid Leave",
		"all_leaves": "All Leaves",
		"leave_status": "Leave Status",
		"leave_request": "Leave Request",
		"leave_period": "Leave Period",
		"leave_type": "Leave Type",
		"leave_settings": "Leave Settings",
		"leave_duration": "Leave duration",
		"leave_attachment_allowed_file_types": "Allowed file types: jpeg, jpg, gif, png, pdf, zip. (Max file size is 2MB)",
		"response_log": "Response log",
		"applied_by": "Applied by",
		"apply_date": "Apply date",
		"apply_between": "Apply between",
		"see_leave_requests": "See leave requests",
		"leave_taken": "Leave taken",
		"approved": "Approved",
		"upcoming": "Upcoming",
		"total_leave_availability": "Total leave available",
		"leave_type_earning": "Leave type earning",
		"leave_note": "Leave note",
		"reason-note": "Reason note",
		"leave_year_start_from": "Leave will start from the month of",
		"any_type_of_change_will_be_effected_from_next_day": "Any type of change will be effective on the next day.",
		"employees_for_allowance": "Employees for allowance",
		"add_employee_status_message": "Add employment status to allow employee for auto allowance",
		"for_unpaid_leave": "For unpaid leave",
		"for_paid_leave": "For paid leave",
		"single_level_suggestion": "Only main manager can response to leave request",
		"request_approval_type": "Request approval type",
		"multi_level": "Multi level",
		"single_level": "Single level",
		"allow_bypass_suggestion": "In the enable state all managers can bypass the leave request",
		"allow_bypass": "Allow bypass",
		"manage_leave_audience_message": "Add role\/user to whom you don't want review leave request.",
		"special_audience": "Special audience",
		"employees_on_leave": "Employees on leave",
		"single_day": "Single day",
		"multi_day": "Multi day",
		"total_leave_hours": "Total leave hours",
		"first_half": "First half",
		"last_half": "Last half",
		"hours": "Hours",
		"day": "Day",
		"monthly_earning": "Monthly earning",
		"response_note": "Response note",
		"bypassed_to_manager": "Bypass the request to senior manager",
		"update_status": "Update status",
		"half_days": "Half days",
		"half_day": "Half day",
		"hour": "Hour",
		"not_added": "Not Added",
		"already_bypassed": "Already by passed to senior manager",
		"nothing_to_change": "Nothing To Change",
		"date_range": "Date range",
		"employee_leave": "Employee leave",
		"allowance_policy": "Allowance Policy",
		"user_leave_cant_be_less_than_taken_amount": "Leave amount can't be less than taken amount of the employee. Which is :taken",
		"cant_delete_employee_leave_type_warning": "You can't delete this employee leave allowance. It's has leaves",
		"no_available_leave": "No available leaves for this employee",
		"remove": "Remove",
		"user_leave": "User Leaves",
		"request_leave": "Request Leave",
		"can_not_delete_used_leave_type": "Can not delete! Leave type is in use.",
		"show_rejected_leaves": "Show rejected leaves",
		"multi_level_leave_approval_note": "Need multi approval by Department manager based on department hierarchy or single approval by Manager\/App admin.",
		"single_level_leave_approval_note": "Only one approval needed by any Department manager to admin user.",
		"leave_is_not_available_on_weekend": "Leave is not available in weekend",
		"time_not_match_with_work_shift": "Leave time not match with work shift time",
		"requested_amount_is_greater_then_available_leaves": "Request amount is greater than available leaves",
		"leave_is_not_available": "Leave is not available",
		"Leave_time_exists_in_previous_leaves": "Leave already exists on this date",
		"Leave_time_exists_in_previous_leaves_request": "A Leave request is pending on this date",
		"cannt_add_Leaves_on_holiday": "Can't add leaves on holiday",
		"cant_delete_designation": "Can not delete! Designation has active users.",
		"cant_delete_employment_status": "Can not delete! Employment Status has active employees.",
		"reviewed": "Reviewed",
		"bypassed": "Bypassed",
		"leave_must_assigned_in_current_leave_year": "Leave must assigned in current leave year!",
		"set_credentials": "Set imported database credentials",
		"db": "DB",
		"import_from_database": "Import From Database",
		"start": "Start",
		"database_configuration": "Database Configuration",
		"install": "Install",
		"db_connection": "Database connection",
		"database_hostname": "Database hostname",
		"database_port": "Database port",
		"database_name": "Database name",
		"database_username": "Database username",
		"database_password": "Database password",
		"admin_login_details": "Admin login details",
		"password_requirements": "Password requirements",
		"mysql": "MySQL 5.6+",
		"pgsql": "PostgreSQL 9.4+",
		"sqlsrv": "SQL Server 2017+",
		"app_installed_successfully": "App installed successfully",
		"general_configuration": "General Configuration",
		"required_environments": "Required Environments",
		"purchase_code": "Purchase code",
		"code": "Code",
		"invalid_purchase_code": "Invalid purchase code.",
		"server_requirements": "Server Requirements",
		"server_permission_errors": "Please fix server and permissions error to proceed.",
		"php": "Php",
		"version_required": "Version {number} required",
		"environment": "Environment",
		"database_label": "Database",
		"attention": "Attention",
		"server_permission_required": "{replace} required server write permission to install and run the apps. You can remove write permission of .env after installation.",
		"no_updates_found": "No update found.",
		"subject_for_this_email": "subject for this email",
		"please_update_your_php_version_to_number": "Please update your php version to :number",
		"public_directory_must_be_writeable_to_update_the_app": "Server must have the permission to write in root directory of app and public directory in order to update the app.",
		"install_zip_extension": "Zip extension is required in order to update the apps.",
		"please_install_version_first": "Please install version :number first.",
		"version_installed_successfully": ":version installed successfully.",
		"update_warning": "1. Please backup all files and database before start the installation of updates (including language files if you are using custom_lang.php file to overwrite translation text) and review the changelog.\n                    <br> 2. You must install the previous versions to update the new version.",
		"this_will_update_entire_app": "This action will update the app to the selected version.",
		"no_updates_available": "No updates available.",
		"please_complete_the_first_step": "Please complete the first step.",
		"The user who will receive the notification": "The user who will receive the notification.",
		"Logo of the app": "Logo of the app",
		"Name of the app": "Name of the app",
		"The user who performed the action": "The user who performed the action",
		"The resource name of the event": "The resource name of the event",
		"Page link of resource": "Page link of resource",
		"Invitation url for the user": "Invitation url for the user",
		"We'll stop sending you this type of email": "We'll stop sending you this type of email",
		"You are using version": "You are using :version.",
		"no_new_update_found": "No new update found.",
		"setting": "Setting",
		"effective_date": "Effective date",
		"effective_date_must_be_getter_than_now": "Effective date must be getter than now",
		"minimum_salary": "Minimum salary",
		"maximum_salary": "Maximum salary",
		"increment": "Increment",
		"payroll": "Payroll",
		"payrun": "Payrun",
		"payslip": "Payslip",
		"payroll_settings": "Payroll Settings",
		"payrun_period": "Payrun period",
		"payrun_type": "Payrun Type",
		"net_salary": "Net salary",
		"monthly": "Monthly",
		"hourly": "Hourly",
		"consider_attendance": "Consider attendance",
		"payslip_generation": "Payslip generation",
		"generating_day": "Generating day",
		"generating_day_label": "Generating day (n'th day of month)",
		"monthly_payrun_note": "In the enabled state, if employees have no attendance log then the salary will be deducted based on the daily rate.",
		"default_payrun": "Default Payrun",
		"badge_value": "Badge Value",
		"payrun_generating_type": "Payrun generating type",
		"none": "None",
		"eligible_audience": "Eligible Audience",
		"all_user": "All user",
		"restricted_user": "Restricted User",
		"who_are_not_allowed_for_default_payrun": "Who are not allowed for the  default payrun?",
		"who_are_not_allowed_for_default_badge_value": "Who are not allowed for the  default badge value?",
		"department_preference": "Department preference",
		"user_preference": "User preference",
		"how_payrun_work": "How payrun works?",
		"beneficiary": "Beneficiary",
		"beneficiary_badge": "Beneficiary badge",
		"badge": "Badge",
		"beneficiary_type": "Beneficiary type",
		"deduction": "Deduction",
		"active": "Active",
		"inactive": "Inactive",
		"beneficiary_badge_settings": "Beneficiary badge settings",
		"default_payrun_is_not_added_yet": "Default Payrun is not added yet.",
		"add_default_payrun_setting_first": "Please add default Payrun Setting first.",
		"back_to_payrun": "Back to payrun",
		"manual_payrun": "Manual payrun",
		"audience": "Audience",
		"customized": "Customized",
		"executable_month": "Executable month",
		"executable_month_year": "Executable month & year",
		"confirm_and_run": "Confirm & Run",
		"always_run_for_the_last_month": "Always run for the last month",
		"who_are_allowed_for_payrun": "Who are allowed for the payrun?",
		"manual_payrun_audience_message": "You can add users by Department or Employee directly to generate payslip.\n     if you select any department then it takes only active employees from that department. if you need to select inactive or terminated employees, you can select from by user filed",
		"payrun_and_badge": "Payrun and Badge",
		"why_payrun_and_badge": "Why Payrun & Badge?",
		"edit_payrun": "Edit Payrun",
		"add_payrun": "Add Payrun",
		"edit_allowance": "Edit Allowance",
		"edit_deduction": "Edit Deduction",
		"payrun_setting": "Payrun Setting",
		"send_filtered_payslip": "Send Filtered Payslip",
		"send_monthly_payslip": "Send Monthly Payslip",
		"sent": "Sent",
		"resend": "Resend",
		"send": "Send",
		"show_conflicted_payslip": "Show Conflicted Payslip",
		"send_last_month_payslip": "Send last month payslip.",
		"payrun_audience": "Payrun Audience",
		"payroll_summery": "Payroll Summery",
		"view_pdf": "View PDF",
		"download_pdf": "Download PDF",
		"filter_data_which_are_conflicted": "Filter data which are conflicted.",
		"how_badge_value_work": "How badge value work?",
		"how_payrun_audience_work": "How payrun audience work?",
		"by_default_all_payrun_and_beneficiary_badges_is_set_from_default_setting": "By default all payrun and beneficiary badges is set from default {setting}",
		"you_can_individually_update_or_change_these_values_from_the_edit_option": "You can individually update or change these values from the edit option.",
		"default_payrun_is_applicable_to_generate_payslip_for_all_employees_whenever_it_execute_from_payrun_module": "Default payrun is applicable to generate payslip for all employees (Except those are updated individually) whenever it execute from {payrun} module.",
		"you_can_set_payrun_individually_over_the_default_from_the_employees_details": "You can set payrun individually over the default from the {employees} details.",
		"you_can_set_beneficiary_individually_over_the_default_from_the_employees_details": "You can set beneficiary individually over the default from the {employees} details.",
		"create_badge_for_allowance_or_deduction_from_beneficiary_badge_module": "Create badge for allowance or deduction from {beneficiary_badge} module.",
		"select_badge_and_assign_a_value_which_will_applicable_for_all_employees_while_execute_payrun": "Select badge and assign a value that will applicable for all employees (Except those are updated individually) while execute payrun.",
		"you_can_also_update_beneficiaries_in_payslip_generated_for_every_employee": "You can also update beneficiaries in {payslip} generated for every employee.",
		"selecting_all_will_execute_payrun_for_every_employee_while_executing_default_payrun": "Selecting All User will execute payrun for every employee while executing default payrun.",
		"selecting_restricted_user_will_prevent_execute_payrun_for_selected_employee_or_department_while_executing_default_payrun": "Selecting restricted user will prevent execute payrun for selected employee or department while executing default payrun.",
		"default_payrun_settings_not_set": "Default payrun settings not added yet",
		"all_good_just_have_quick_read": "All good, Just have a quick read!",
		"default_payrun_start_notice": "You are going to add default payrun based on the settings or employee preference.",
		"have_look_generated_default_payrun": "Please have a look on payrun generating for last month.",
		"make_your_own": "Please make your own",
		"also_can": "Also can",
		"otherwise_run_default_payrun": "Otherwise run the default payrun",
		"includes_employee": "Includes {count} employees",
		"weekly": "Weekly",
		"earning": "Earning",
		"default": "Default",
		"followed_by": "Followed by {setting}",
		"and_payrun_settings": "and payrun settings",
		"mixed": "Mixed",
		"period": "period",
		"consider_type": "consider type",
		"multiple_time_period": "Multiple time period",
		"send_this_payslip_to_employee": "{send} this payslip to {employee}.",
		"employee_payslip": "Employee payslip",
		"payslip_has_been_sent_successfully": "Payslip has been sent successfully.",
		"run": "Run",
		"payrun_date": "Payrun date",
		"show_conflicted": "Show conflicted",
		"no_payrun_settings_warning": "To run default payrun you must set up payrun settings. Click {location} to add payrun settings.",
		"no_payrun_settings_found": "To run default payrun you must set up payrun settings.",
		"show_conflicted_payrun": "Show conflicted payrun",
		"restore_to_default": "Restore to default",
		"edit_badge": "Edit Badge",
		"payslip_sending_has_started": "Payslip sending has started.",
		"basic_salary": "Basic salary",
		"net_payable_salary": "Net payable salary",
		"created_at": "Created at",
		"not_yet_sent": "Not yet sent",
		"sent_to_employee": "Sent to {count} employee",
		"resend_payslip": "Resend payslip",
		"send_payslip": "Send payslip",
		"no_payruns_found": "no payruns found",
		"partially_sent": "Partially sent",
		"conflicted_payslip": "Conflicted Payslip",
		"payslip_sent": "Payslip Sent",
		"total_payslip": "Total Payslip",
		"can_not_delete_used_badge": "Can not delete used badge!",
		"can_not_deactivate_used_badge": "Can not deactivate used badge!",
		"sending_filtered_payslip": "Sending filtered payslip.",
		"sending_for_last_month": "Sending for last month.",
		"sending_all_payslip_of_this_payrun": "Sending all payslip of this payrun.",
		"payslip_has_started_sending": "Payslip has started sending.",
		"payslips_conflicted_number_of_employees": "Payslip of {number} employees are conflicted",
		"restricted_user_for_payrun": "Restricted user for payrun.",
		"by_default_all_are_eligible": "By default all are eligible",
		"restricted_user_for_beneficiary_badge": "Restricted user for beneficiary badge.",
		"employment_status_preference": "Employment Status preference",
		"payrun_audience_settings": "Payrun audience settings",
		"conflicted_payslip_for_employee": "Conflicted payslip for employee",
		"view_confliction": "View confliction",
		"generating": "Generating",
		"generated_of": "generated of",
		"payrun_execution_completed": "Payrun execution completed.",
		"no_payslip_found": "No payslip found!",
		"beneficiary_amount": "Beneficiary Amount",
		"total_deduction": "Total Deduction",
		"total_earning": "Total Earning",
		"based_on": "Based on",
		"payslip_for": "Payslip for",
		"allowances": "Allowances",
		"deductions": "Deductions",
		"details": "Details",
		"please_filter_your_payslip_first": "Please filter your payslip first.",
		"similar_payslips": "similar payslips",
		"drop": "Drop",
		"payrun_id": "Payrun ID",
		"no_conflicts": "No Conflicts!",
		"no_worries": "No Worries!",
		"this_payslip_has_no_confliction_with_other_payslips": "This payslip has no confliction with other payslips.",
		"payslip_confliction_message": "{count} payslips here for similar payrun period. You can Drop or Keep these as you want.",
		"consider_overtime": "Consider Overtime",
		"overtime_included": "Overtime Included",
		"overtime_excluded": "Overtime Excluded",
		"exclude": "exclude",
		"include": "include",
		"manage_conflict": "Manage Conflict",
		"included_overtime": "Included Overtime",
		"excluded_overtime": "Excluded Overtime",
		"attention_please": "Attention please!",
		"customized_date_multi_month_warning_message": "You cannot generate payslip for multiple months, You can only generate payslip for a single month",
		"no_user_found": "No user found",
		"confirm_password": "Confirm Password",
		"working_shift_removed_from_department": "Working Shift removed from the department.",
		"database_credential_error": "Incorrect database credential",
		"working_shift_update_note": "Any type of change will be effective on the next day.",
		"comment": "Comment",
		"invalid_date_or_not_match_with_working_shift": "Invalid date or not match time with working Shift",
		"pending_request": "Pending request",
		"total_request_hours": "Total request hours",
		"single_day_request": "Single day request",
		"multi_day_request": "Multi day request",
		"upcoming_leave": "Upcoming leave",
		"overtime_will_be_calculated_after_the_end_of_the_total_schedule_time": "Overtime will be calculated after the end of the Total schedule time.",
		"checked_to_get_access_for_all_user": "Checked to get access for all users",
		"payee": "Payee",
		"view_all_payslips": "View payslips",
		"manage_users": "Manage Users",
		"for_payrun": "For Payrun",
		"for_beneficiary_badge": "For Beneficiary Badge",
		"restriction_note": "Restriction Note",
		"user_restriction_note": "If you want to restrict some users for the default payrun settings, then please add users for",
		"by_default_all_users_are_eligible_for": "By default, all users are eligible for",
		"payrun_and_beneficiary_badges": "Payrun and Beneficiary badges.",
		"department_manager_manage_user_message": "The department manager cannot be managed from here. Please go to the {department} module and change the manager of a department as you need.",
		"has_attendance": "Has Attendance",
		"import": "Import",
		"import_employee": "Import Employees",
		"download": "Download",
		"payslip_note": "Payslip note",
		"add_payslip_note_here": "Add payslip note here",
		"optional": "optional",
		"csv_format_guideline": "CSV format guideline",
		"csv_format_guide": "Format your CSV the same way as the sample file.",
		"csv_column_separation_guide": "Your CSV columns should be separated by commas, not semicolons or any other characters.",
		"csv_column_guide": "The names and the number of the column in your CSV should be the same as the sample.",
		"csv_huge_data_guide": "Recommended CSV file should not contain more than 500 rows with default server configuration.",
		"csv_error_handle_guide": "For resolving the error download the error file and correct the incorrect cells and import that file again through .csv format.",
		"csv_after_import_message": "All imported employees will receive an email to reset their password in order to log in except the terminated employee.",
		"csv_column_data_format": "The columns : department, designation, employment_status and roles value must be the same value that exists on the application. For the gender column three option available [male, female, other], for multiple roles use only comma(,) to separate roles and the joining_date column must be the date format of YYYY-MM-DD",
		"csv_download_label": "We would like to provide you a sample .CSV file - ",
		"csv_required_field_guide": "Required field's (name, email, gender, employee_id, department, designation, employment_status, roles) column cell must not be empty.",
		"partially_imported": ":subject partially imported.",
		"has_been_imported_successfully": ":subject has been imported successfully.",
		"is_invalid_message": "The selected :subject is invalid.",
		"data_imported_successfully": "Data imported successfully.",
		"partially_data_imported": "Data imported partially!",
		"after_employee_import_message": "All imported employees will receive an email to reset their password in order to log in except the terminated employee.",
		"errors_found": "Errors found",
		"maximum_execution_time_exceeded": "Maximum execution time exceeded!",
		"maximum_row_exceeded_message": "CSV file can not contain more than 500 rows(employee) at a time!",
		"action_not_allowed_in_demo": "Action not allowed in demo version",
		"login_as": "Login as",
		"select_role": "Select role",
		"test_email": "Test Email",
		"send_test_email": "Send test email",
		"email_address": "Email address",
		"message": "Message",
		"subject": "Subject",
		"email_sending_failed": "Email sending failed!",
		"email_sent_successfully": "Email sent successfully.",
		"email_setup_is_not_correct": "Email setup is not correct!",
		"use_default_logo": "Use default logo",
		"use_default_title": "Use default title",
		"use_default_address": "Use default address",
		"customize": "Customize",
		"payslip_logo": "Payslip logo",
		"payslip_title": "Payslip title",
		"payslip_settings": "Payslip settings",
		"payslip_address": "Payslip address",
		"includes_off_day": "Includes {count} off day",
		"includes_off_days": "Includes {count} off days"
	}));
	window.localStorage.setItem('base_url', 'https://payday.gainhq.com');
	window.appLanguage = window.localStorage.getItem('app-language');
	</script>
	<script>
	window.tenant = {
		"id": 1,
		"name": "Default tenant",
		"short_name": "default-tenant",
		"is_single": true
	}
	</script>
	<script>
	window.settings = {
		"tenant_name": "PayDay",
		"tenant_icon": "\/images\/icon.png",
		"language": "en",
		"date_format": "d-m-Y",
		"time_format": "h",
		"time_zone": "UTC",
		"currency_symbol": "$",
		"decimal_separator": ".",
		"thousand_separator": ",",
		"number_of_decimal": "2",
		"currency_position": "prefix_with_space"
	}
	</script>
	<script>
	window.user = {
		"id": 1,
		"first_name": "sachin",
		"last_name": "kumar",
		"email": "sachin@demo.com",
		"last_login_at": null,
		"created_by": null,
		"status_id": "1",
		"invitation_token": null,
		"created_at": "2021-11-02T06:04:25.000000Z",
		"updated_at": "2021-11-02T06:04:25.000000Z",
		"deleted_at": null,
		"is_in_employee": "1",
		"full_name": "sachin kumar",
		"profile_picture": null,
		"roles": [{
			"id": 1,
			"name": "App Admin",
			"pivot": {
				"user_id": "1",
				"role_id": "1"
			}
		}]
	}
	</script>
	<script src="https://payday.gainhq.com/js/manifest.js"></script>
	<script src="https://payday.gainhq.com/js/vendor.js"></script>
	<script src="https://payday.gainhq.com/js/core.js"></script>
	<div>
		<div class="toast-container toast-top-right"></div>
		<div class="toast-container toast-bottom-right"></div>
		<div class="toast-container toast-bottom-left"></div>
		<div class="toast-container toast-top-left"></div>
		<div class="toast-container toast-top-full-width"></div>
		<div class="toast-container toast-bottom-full-width"></div>
		<div class="toast-container toast-top-center"></div>
		<div class="toast-container toast-bottom-center"></div>
	</div>
	<script src="https://payday.gainhq.com/vendor/summernote/summernote-bs4.js"></script>
</body>
<loom-container id="lo-engage-ext-container">
	<loom-shadow classname="resolved"></loom-shadow>
</loom-container>

</html>