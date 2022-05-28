<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('theme/css/NeighborsInSpotlightStyle.css')}}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
		<title>ya jari</title> @section('myfavouritesneighbour','active')
		<style type="text/css">
			@media (max-width: 800px) {
			textarea::placeholder {
				font-size: 13px;
			}
			.background-image {
				width: 100%;
				height: 200px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden;
			}
			.ReportModalBody {
				padding: 1rem 1rem 3rem 1rem;
			}
			#dropdownMenuButton1 {
				margin-left: 1.3rem;
				width: 8rem;
				height: 3.5rem;
			}
			.NeighborsSText1 {
				font-size: 22px;
			}
			#request-textID2 {
				margin: 0.4rem 0.1rem;
			}
			.paragraphside {
				padding-left: 50px;
			}
			.CardNameStar {
				margin-left: 2rem;
			}
			.QuotationButton {
				font-size: 11px;
			}
			.RequestDIVP {
				padding: 0.1rem 0 0.1rem 0.5rem;
			}
			.RatingText1 {
				font-size: 11px;
				margin-top: 0.1rem;
			}
			.ReportContactFlex {
				justify-content: space-between;
			}
			.ReportCol {
				text-align: start;
			}
			.SendMessageButton,
			.CallButton {
				font-size: 12px;
				padding: 0.5rem 1rem;
				border-radius: 5px;
			}
			.CallButton {
				padding: 0.5rem 2rem;
			}
			.Modelinput {
				margin-right: 3%;
			}
			.MBText1 {
				font-size: 12px;
				margin-bottom: 0.5rem;
			}
			.MBText2 {
				font-size: 12px;
				margin-bottom: 0.5rem;
			}
			.modal-body {
				padding: 2rem 1rem;
			}
			.responses-buttons1234 {
				margin-bottom: 0.5rem;
			}
			.SearchRow {
				position: relative;
				left: 13px;
				top: -4px;
			}
			.Contact-b1 {
				display: none;
			}
			.Contact-mobile {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 16px;
				display: block;
			}
			.navalign {
				padding-left: 20px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				padding-right: .5rem;
			}
			.navalign2 {
				padding-left: 34px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				width: 35%;
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.categorytop {
				position: relative;
				top: 1px;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem .4rem;
				width: 4.8rem;
				height: 1.5rem;
				position: relative;
				border: 2px solid #08B1E7;
				border-radius: 5px;
				font-size: 12px;
				top: 6px;
				left: 9px;
			}
			.requestnav {
				padding-left: 0px;
				text-decoration: none;
			}
			.servicesnav {
				padding-left: 0px;
				padding-right: 20px;
				text-decoration: none;
			}
			.publishnavbar {
				position: relative;
				left: -9px;
				text-align: center;
				width: 20%;
			}
		}
		@media (max-width: 768px) {
			textarea::placeholder {
				font-size: 13px;
			}
			.ReportModalBody {
				padding: 1rem 1rem 3rem 1rem;
			}
			#dropdownMenuButton1 {
				margin-left: 1.3rem;
				width: 8rem;
				height: 3.5rem;
			}
			.NeighborsSText1 {
				font-size: 22px;
			}
			#request-textID2 {
				margin: 0.4rem 0.1rem;
			}
			.paragraphside {
				padding-left: 50px;
			}
			.CardNameStar {
				margin-left: 2rem;
			}
			.QuotationButton {
				font-size: 11px;
			}
			.RequestDIVP {
				padding: 0.1rem 0 0.1rem 0.5rem;
			}
			.RatingText1 {
				font-size: 11px;
				margin-top: 0.1rem;
			}
			.ReportContactFlex {
				justify-content: space-between;
			}
			.ReportCol {
				text-align: start;
			}
			.SendMessageButton,
			.CallButton {
				font-size: 12px;
				padding: 0.5rem 1rem;
				border-radius: 5px;
			}
			.CallButton {
				padding: 0.5rem 2rem;
			}
			.Modelinput {
				margin-right: 3%;
			}
			.MBText1 {
				font-size: 12px;
				margin-bottom: 0.5rem;
			}
			.MBText2 {
				font-size: 12px;
				margin-bottom: 0.5rem;
			}
			.modal-body {
				padding: 2rem 1rem;
			}
			.responses-buttons1234 {
				margin-bottom: 0.5rem;
			}
			.SearchRow {
				position: relative;
				left: 13px;
				top: -4px;
			}
			.Contact-b1 {
				display: none;
			}
			.Contact-mobile {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 16px;
				display: block;
			}
			.navalign {
				padding-left: 20px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				padding-right: .5rem;
			}
			.navalign2 {
				padding-left: 34px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				width: 35%;
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.categorytop {
				position: relative;
				top: 1px;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem .4rem;
				width: 4.8rem;
				height: 1.5rem;
				position: relative;
				border: 2px solid #08B1E7;
				border-radius: 5px;
				font-size: 12px;
				top: 6px;
				left: 9px;
			}
			.requestnav {
				padding-left: 0px;
				text-decoration: none;
			}
			.servicesnav {
				padding-left: 0px;
				padding-right: 20px;
				text-decoration: none;
			}
			.publishnavbar {
				position: relative;
				left: -9px;
				text-align: center;
				width: 20%;
			}
			.background-image {
				width: 100%;
				height: 200px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden;
			}
		}
		@media (max-width: 425px) {
			.myfavoriteneighortop {
				position: relative;
				top: -15px;
			}
			.paragraphside {
				padding-left: 0px;
			}
			.requestnav {
				padding-left: 0px;
				text-decoration: none;
			}
			.servicesnav {
				padding-left: 0px;
				padding-right: 0px;
				text-decoration: none;
			}
			.navpublish {
				padding-left: 20px;
				width: 200px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.publishnavbar {
				position: relative;
				left: -10px !important;
				text-align: center;
			}
			.follow-img {
				width: 40px;
				padding-top: 0.6rem;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem .2rem;
				width: 3.6rem;
				height: 1.3rem;
				position: relative;
				border: 1px solid #83d3ec;
				border-radius: 5px;
				font-size: 10px;
				top: 6px;
				left: 13px;
			}
			.callmodal {
				width: 80%;
				position: relative;
				left: 50px;
			}
			.SearchButton {
				position: relative;
				width: 2rem;
				height: 3rem;
				background: white;
			}
			.paragraphtop {
				position: relative;
				top: 10px;
			}
			.navalign {
				padding-left: 20px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				padding-right: .5rem;
			}
			.ahre {
				padding-left: 2rem;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				width: 56%;
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.navalign2 {
				padding-left: 34px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 235px;
				display: none;
			}
			.Contact-mobile {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 16px;
				display: block;
			}
			.mobilemodal {
				width: 80%;
				position: relative;
				left: 50px;
			}
			.categories {
				position: relative;
				top: 70px;
				left: -2px;
			}
			.lebardoicon {
				position: relative;
				left: -2px;
			}
			.lebardotext {
				position: relative;
				left: -2px;
			}
			.arrow {
				position: relative;
				left: 90px;
			}
			.distance {
				position: relative;
				left: 95px;
			}
			.search {
				position: relative;
				left: 11px;
				top: -25px;
				width: 26.5rem;
				height: 57px;
			}
			.dropdownstatus {
				display: none;
			}
			.tickarrow {
				position: relative;
				left: -16px;
				top: 22px
			}
			.myfavoriteneighor {
				position: relative;
				top: -15px;
			}
			.cardmobiletop {
				position: relative;
				top: -15px;
			}
			.hrmobile {
				width: 93%;
				margin: auto;
				height: 2px;
				position: relative;
				left: -3px
			}
			.background-image {
				width: 100%;
				height: 145px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden;
				margin-top: 15px;
			}
		}
		@media only screen and (max-width: 411px) {
			.search {
				position: relative;
				left: 11px;
				top: -25px;
				width: 25.5rem;
				height: 57px;
			}
			.distance {
				position: relative;
				left: 92px;
			}
		}
		@media only screen and (max-width: 375px) {
			.hrmobile {
				width: 94%;
				margin: auto;
				height: 2px;
				position: relative;
				left: -3px;
			}
			.cardmobiletop {
				position: relative;
				top: -15px;
			}
			.myfavoriteneighor {
				position: relative;
				top: -15px;
			}
			.arrow {
				position: relative;
				left: 73px;
			}
			.distance {
				position: relative;
				left: 74px;
			}
			.paragraphtop {
				position: relative;
				top: 13px;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 195px;
			}
			.Contact-mobile {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 17px;
				display: block;
			}
			.search {
				position: relative;
				left: 5px;
				width: 23.4rem;
				top: -25px;
				height: 57px;
			}
			.dropdownstatus {
				display: none;
			}
			.navalign {
				padding-left: 30px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.navalign2 {
				padding-left: 45px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				width: 56%;
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.mobilemodal {
				width: 80%;
				position: relative;
				left: 42px;
			}
		}
		@media only screen and (max-width: 360px) {
			.search {
				position: relative;
				left: 5px;
				width: 22.5rem;
				top: -25px;
				height: 58px;
			}
			.distance {
				position: relative;
				left: 68px;
			}
			.hrmobile {
				width: 93%;
				margin: auto;
				height: 2px;
				position: relative;
				left: -4px;
			}
			.arrow {
				position: relative;
				left: 69px;
			}
			.background-image {
				background-image: url(theme/pictures/Group\ 2381.png);
				width: 95%;
				height: 130px;
				border-radius: 7%;
				background-position: center;
				background-size: cover;
				position: relative;
				left: 10px;
				overflow: hidden;
			}
		}
		@media only screen and (max-width: 320px) {
			.navalign {
				padding-left: 30px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.hrmobile {
				width: 91%;
				margin: auto;
				height: 2px;
				position: relative;
				left: -4px;
			}
			.mobilemodal {
				width: 80%;
				position: relative;
				left: 40px;
			}
			.SendMessageButton {
				font-size: 11px;
				padding: 0.6rem 0.8rem;
				border-radius: 5px;
			}
			.CallButton {
				font-size: 12px;
				padding: 0.5rem 1rem;
				border-radius: 5px;
			}
			.search {
				position: relative;
				left: -8px;
				width: 21rem;
			}
			.dropdownstatus {
				display: none;
			}
			.navalign2 {
				padding-left: 40px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				width: 56%;
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.ReportContactFlex {
				position: relative;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 140px;
			}
			.arrow {
				position: relative;
				left: 44px;
			}
			.distance {
				position: relative;
				left: 45px;
			}
		}
		@media all and (min-width: 1024px) {
			.background-image {
				width: 100%;
				height: 200px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden;
			}
			.showcase-text1 {
				font-size: 23px;
				font-weight: 900;
				padding-top: 2rem;
			}
			.showcase-text2 {
				font-size: 17px;
				font-weight: 500;
			}
			.Contact-mobile {
				display: none;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 305px;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem 0.4rem;
				width: 4.8rem;
				height: 1.5rem;
				position: relative;
				border: 2px solid #08B1E7;
				border-radius: 5px;
				font-size: 12px;
				top: 6px;
				left: 9px;
			}
		}
		@media all and (min-width: 1165px) {
			.navalign {
				padding-left: 240px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				display: inline-flex;
				padding-right: .5rem;
			}
			.ahre {
				padding-left: 2rem;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem .4rem;
				width: 4.8rem;
				height: 1.5rem;
				position: relative;
				border: 2px solid #08B1E7;
				border-radius: 5px;
				font-size: 12px;
				top: 6px;
				left: 9px;
			}
			.arrow {
				position: relative;
				left: 0px;
			}
			.distance {
				position: relative;
				left: 0px;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 305px;
			}
			.navalign2 {
				padding-left: 200px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				display: inline-flex;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.Contact-mobile {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 235px;
				display: none;
			}
			.background-image {
				width: 100%;
				height: 190px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden
			}
		}
		@media all and (min-width: 1300px) {
			.background-image {
				width: 100%;
				height: 190px;
				border-radius: 2%;
				background-image: url(theme/pictures/Group\ 2381.png);
				background-position: center;
				background-size: cover;
				position: relative;
				overflow: hidden
			}
			.showcase-text1 {
				font-size: 22px;
				font-weight: 900;
				padding-top: 2rem;
			}
		}
		@media all and (min-width: 1440px) {
			.socialicon {
				transform: translateX(80%);
			}
			.followus {
				position: relative;
				left: 330px;
				top: -50px;
			}
		}
		@media all and (min-width: 1590px) {
			.navalign {
				padding-left: 350px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				display: inline-flex;
				padding-right: .5rem;
			}
			.navalign2 {
				padding-left: 395px;
				padding-top: 10px;
				color: #ff6e9a;
				font-weight: bold;
				display: inline-flex;
			}
			.distancetop {
				position: relative;
				top: 1px;
			}
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 310px;
				top: -2px;
			}
			.categorytop {
				position: relative;
				top: 1px;
			}
			.nav-publish {
				padding-left: 20px;
				background: linear-gradient(to right, #ffacbf, #fa4d75);
				color: white;
				border-radius: 20px;
				align-items: center;
				padding-top: 10px;
			}
			.socialicon {
				transform: translateX(80%);
			}
			.followus {
				position: relative;
				left: 328px;
				top: -50px;
			}
			.particularcard {
				color: #2bbcea;
				padding: 0.1rem .4rem;
				width: 4.8rem;
				height: 1.5rem;
				position: relative;
				border: 2px solid #08B1E7;
				border-radius: 5px;
				font-size: 12px;
				top: 6px;
				left: 9px;
			}
		}
		@media (min-width: 1600px) {
			.Contact-b1 {
				height: 30px;
				background: linear-gradient(to right, #76EDF9, #13B7E9);
				width: 100px;
				color: white;
				border-radius: 5px;
				font-size: 12px;
				text-align: center;
				padding-top: 6px;
				position: relative;
				left: 295px;
				top: 2px;
			}
			@media all and (min-width: 1920px) {
				.navalign {
					padding-left: 170px;
					padding-top: 10px;
					color: #ff6e9a;
					font-weight: bold;
					display: inline-flex;
					padding-right: .5rem;
				}
				.ptt-3 {
					padding-top: 2.72rem !important;
				}
				.Contact-b1 {
					height: 30px;
					background: linear-gradient(to right, #76EDF9, #13B7E9);
					width: 100px;
					color: white;
					border-radius: 5px;
					font-size: 12px;
					text-align: center;
					padding-top: 7px;
					position: relative;
					left: 305px;
					top: -2px;
				}
				.navalign2 {
					padding-left: 920px;
					padding-top: 10px;
					color: #ff6e9a;
					font-weight: bold;
					display: inline-flex;
				}
				.particularcard {
					color: #2bbcea;
					padding: 0.1rem .4rem;
					width: 4.8rem;
					height: 1.5rem;
					position: relative;
					border: 2px solid #08B1E7;
					border-radius: 5px;
					font-size: 12px;
					top: 6px;
					left: 9px;
				}
				.showcase-text1 {
					font-size: 26px;
					font-weight: 900;
					padding-top: 2.31rem;
				}
			}
		</style>
	</head>
	<body style="zoom:90%">
		<!--Nav Bar-->@if(Auth::user()) @include('frontend.layout.navbar2') @else @include('frontend.layout.navbar') @endif
		<!--Show Case-->
		<section class="ptt-3 text-center">
			<div class="container-fluid text-light" style="width: 100%;margin: auto;">
				<div class="background-image text-center" style="border-radius: 25px;">
					<p class="showcase-text1" style="margin-bottom: 0;">My Favourites</p>
					<p class="showcase-text1" style="padding-top: 0;">Hundreds of service providers near you to do your help</p>
					<p class="showcase-text2" style="font-size: 25;">Find a service provider near who can help you</p>
				</div>
			</div>
		</section>
		<!--Neighbors-->
		<section style="padding-top: 3rem!important;
			padding-bottom: 1rem!important;">
			<div class="container" style="max-width: 70rem;">
				<div class="d-flex flex-wrap">
					<div class="col-xxl-9 col-sm-9" style="margin-left: 1.3vw;">
						<div class="SearchRow search row mb-3">
							<form class="d-flex my-2" style="justify-content: left;">
								<a class="SearchButton" type="submit" style="border: none;"> <img src="{{asset('theme/icons/Icon feather-search.png')}}" class="SearchButtonImg"> </a>
								<input style="border: none;margin-left: 1rem;" class="form-control" name="search" type="search" placeholder="Search" aria-label="Search"> </form>
							</div>
						</div>
						<!-- <div>
							<div class="dropdown dropdownstatus mb-5">
								<button class="btn dropdown-toggle dropdownmobile" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Status </button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="row myfavoriteneighor" style="width: 92%;margin: auto;">
						<p class="NeighborsSText1">My Favourites Neighbors</p>
					</div>
					@foreach($data as $d)
					<div class="col pb-5 myfavoriteneighortop" style="width: 90%;margin: auto;">
						<div class="RequestDIVP">
							<div class="d-flex" style="justify-content: space-between;padding-bottom: 15px;padding-top: 10px;">
								<div class="">
									<p class="responses-date1 text-start">{{$d->created_at->diffForHumans()}}</p>
								</div>
								<div class="text-end d-flex" style="padding-right: 20px;">
									<a href="{{Auth::user()!=NULL?route('serviceproviderfav', [ 'id' =>  $d->provider_d->id ]):'#'}}"> <img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_24px.png')}}"> </a>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 col-12">
									<div class="d-flex" style="justify-content: left;">
										<div class="" style="position: relative;">
											<a href="" style="text-decoration:none">
												@if($d->provider_d->image)
												<img
												class="requestFaceImg1" style="height: 75px;" src="{{asset($d->provider_d->image)}}">
												@else
												<img
												class="requestFaceImg1" style="height: 75px;" src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png">
												@endif
												<img src="{{asset('theme/icons/Group 2412.png')}}" class="requestFaceImgTICK1 tickarrow">
												<p class="particularcard">particular</p>
											</a>
										</div>
										<div class="text-start CardNameStar">
											<div class="row">
												<a href="" style="text-decoration:none">
													<p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; color: black;"> <b>{{$d->provider_d->name}}</b> </p>
												</a>
											</div>
											<div class="row">
												<div class="col d-flex"> <img class="responses-star1 mt-1" src="{{asset('theme/icons/Group 2411.png')}}"> </div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-7 col-sm-12 col-12 paragraphtop" style="padding-left: 20px;">
									<p id="request-textID2" class="text-start paragraphside"> {{$d->provider_d->aboutme}} </p>
								</div>
							</div>

							<div id="responsesID1" class="col-12 categories" style="padding-left: 10px;"> <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 18px;height: 12px;margin-top: 5px;">
								<p class="responses-buttons1234 text-start"> {{isset($d->provider_d->user_services) ? $d->provider_d->user_services->service : ''}}</p>
							</div>
							<hr id="LineID1" class="hrmobile">
							<div class="row pt-2" style="padding-left: 10px;">
								<div class="col-md-2 col-sm-4 col-6 d-flex pt-1"> <img src="{{asset('theme/icons/ic_place_-1.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
									<p class="responses-buttons1234 text-start lebardotext">{{$d->provider_d->address}}</p>
								</div>
								<div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1"> <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 18px;height: 12px;margin-top: 5px;">
									<p class="responses-buttons1234 text-start categorytop">{{isset($d->provider_d->user_services) ? $d->provider_d->user_services->service : ''}}</p>
								</div>
								<div class="col-md-2 col-sm-4 col-6 d-flex pt-1 distancetop"> <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 20px;height: 10px;margin-top: 5px;">
									<p class="responses-buttons1234 text-start distance">{{number_format($d->distance,1)}} Km</p>
								</div>
								
								<div class="col-md-6 col-sm-12 col-12 pb-2">
									<div class="d-flex ReportContactFlex">
										<div class="">
											<div class="row">
												<div class="" style="padding-left: 40px;padding-right: 40px;">
													@if(Auth::user())
													<a href="" style="text-decoration:none;"
														class=" nav-item nav-link Contact-b1" data-bs-toggle="modal"
														role="button" data-bs-target="#staticBackdrop{{$d->provider_d->id}}"
													data-bs-dismiss="modal">Contact</a>
													@else
													<a href="#LoginRegisterModal8" style="text-decoration:none;"
														class=" nav-item nav-link Contact-b1" data-bs-toggle="modal"
													role="button">Contact</a>
													@endif


													<div class="modal fade" id="staticBackdrop{{$d->provider_d->id}}" data-bs-keyboard="false"
														tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered">
															<div class="modal-content">
																<div class="modal-body">
																	<div class="col text-center mb-3">
																		<img src="{{asset('theme/icons/bluecontact.png')}}"
																		style="width: 2.3rem;">
																	</div>
																	<p class="MBText1"> </p>
																	<p class="MBText2">You can make a call or send a message
																		for the further proceedings.
																	</p>
																	<div class="row">
																		<div class="col text-center">
																			<a href="{{route('bluechat', [ 'id' => $d->provider_d->id ])}}"
																			class="SendMessageButton">Send Message</a>
																		</div>
																		<div class="col text-center">
																			<a href="" class="CallButton" data-bs-toggle="modal"
																				data-bs-target="#staticBackdropCall{{$d->id}}"
																			data-bs-dismiss="modal">Make Call</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<section>
														<div class="modal fade" id="staticBackdropCall{{$d->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered">
																<div class="modal-content">
																	<div class="modal-body">
																		<div class="col text-center mb-3"> <img src="icons/ic_contact_phone_24px.png" style="width: 4rem;height:3rem;"> </div>
																		<p class="MBText3"><b>{{$d->provider_d->phone_number}}</b></p>
																		<div class="col text-center"> <a href="" class="CallButton2">Call</a> </div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>
										<div class="">
											<div class="row">
												<div class="" style="padding-left: 40px;padding-right: 40px;">
													
													<!-- <a class="nav-item nav-link Contact-mobile" data-bs-toggle="modal" role="button" data-bs-target="#contactmobile" data-bs-dismiss="modal">Contact</a>  -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
					
					
					
					
				</div>
			</section>
			<!--Pagination-->
			<div class="container">
				<div class="row pagiantionserviceprovider">
					
					{{$data->render("pagination::serviceProviderPagination")}}
				</div>
			</div>
			
			
			@include('frontend.layout.footer') @include('frontend.layout.scripts')
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function() {
				$('.purpose').on('change', function() {
					if(this.value == '1')
					//.....................^.......
					{
						$(".professional").show();
						$(".private").hide();
					} else if(this.value == '2') {
						$(".private").show();
						$(".professional").hide();
					} else {
						$(".professional").hide();
						$(".private").hide();
					}
				});
			});
			</script>
		</body>
	</html>