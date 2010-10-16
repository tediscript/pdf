<?php

class Welcome extends Controller {

    function Welcome() {
        parent::Controller();
    }

    function index() {

        $this->load->library('cezpdf');
        $this->load->helper('pdf');
        prep_pdf();

        $this->cezpdf->ezText('Hello World', 12, array('justification' => 'center'));
        $this->cezpdf->ezSetDy(-10);

        $content = 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.';

        $this->cezpdf->ezText($content, 10);

        $this->cezpdf->ezStream();
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */