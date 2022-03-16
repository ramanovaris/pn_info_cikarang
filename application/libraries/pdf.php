<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Exception;
class Pdf extends Dompdf{
    /**
     * @var 
     */
    public $filename;
    public function __construct(){
        parent::__construct();
        $this->filename = "laporans.pdf";
    }
    /**
     * @access    protected
     * @return    
     */
    protected function ci(){
        return get_instance();
    }
    /**
     * @access    public
     * @param    
     * @param    
     * @return   
     */
    public function createPDF($html, $filename='', $paper = '', $orientation = ''){
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        // $options->set('chroot', 'C:\xampp\htdocs\pn_info_cikarang');
        $dompdf = new DOMPDF($options);
        // $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        // $dompdf->loadHtmlFile($html);
        $dompdf->setPaper($paper, $orientation);// <-- object ini yang perlu kita tambahkan
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('assets/generate_pdf/'.$filename, $output);
    }

    public function PreviePDF($html, $filename='', $paper = '', $orientation = ''){
        // define('DOMPDF_ENABLE_AUTOLOAD', false);
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        // $options->set('chroot', 'C:\xampp\htdocs\pn_info_cikarang');
        $dompdf = new DOMPDF($options);
        // $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        // $dompdf->loadHtmlFile($html);
        $dompdf->setPaper($paper, $orientation);// <-- object ini yang perlu kita tambahkan
        $dompdf->render();
        $output = $dompdf->output();
        // $this->stream($this->filename, array("Attachment" => false));
        $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

    }
}