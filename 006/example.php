<?php
	interface AGiang {
		speakJapanLanguage();
		singASong();
		teaching();
	}

	interface ATam {
		speakEnglishLanguage();
		coding();
	}

	abstract class AStudent {
		
		abstract public function learning();

		abstract public function reasearching();

	}
	class Student extends AStudent{
		public function learning(){

		}
		public function reasearching(){

		}
	}

	class SinhVienIt extends Student implements AGiang, ATam {
		/*
		public function learning(){

		}
		public function reasearching(){

		}
		*/
		public function speakJapanLanguage(){

		}
		public function singASong(){

		}
		public function teaching(){

		}
		public function speakEnglishLanguage(){

		}
		public function coding(){

		}
	}