<?php
class UploadsController extends AppController {
    

    public function upload()
    {
      
    }

    public function index() {
         //$this->autoLayout = false; 
        //$this->layout = 'layouttest';
        // if($this->request->data)
        // {
        //     $file = $this->request->data['file'];

        //     $original_filename = $file['name'];
        //     $uploaded_file = $file['tmp_name'];
        //     $filesize = $file['size'];
        //     $filetype = $file['type'];

        //     $dest_fullpath = App. 'tmp/' .md5(uniqid(rand(), true));

        //     move.uploaded_file($file['tmp_name'], $dest_fullpath);
        // }
        echo "私は今indexアクションにいます";
        $this->layout = 'layouttest';
    }
    //     public $components = array('RequestHandler');
        
    // public function pdf()
    // {
    //     App::import('Vendor', 'tcpdf/tcpdf');

    //     $this->RequestHandler->respondAs('applicaton/pdf');
    //     $this->autoHandler = false;

    //     $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    //     $pdf->AddPage();
    //     $pdf->SetXY(50, 50);
    //     $pdf->Cell(100, 30, 'CakePHP');
    //     $pdf->Output('test.pdf', 'I');
    // }

    // public function download()
    // {
    //     $this->response->file(
    //         APP.'Vendor/a.txt',
    //         array(
    //             'download' => true,
    //             'name' => 'downloaded.txt',
    //         )
    //     );
    //     return $this->response;
    // }

    // public function detail($id)
    // {

    // }

    // public function edit()
    // {
    //     $this->redirect(array(
    //         'controller'=>'Uploads',
    //         'action'=>'detail',
    //         7
    //     ),
    // 301
    // );
    // }

    //  function logg()
    // {
    //     $this->log("ログの書き込みテスト2",LOG_DEBUG);
    // }

    // function edit2()
    // {
    //     $description = null;
    //     $stocks = null;
    //     $catchcopy = null;
    //     $resolutions = array();
    //     $specs = array();

    //     if(isset($this->request->data['description']))
    //     {
    //         $description = $this->request->data['description'];
    //     }

    //     if(isset($this->request->data['stocks']['black']))
    //     {
    //         $stocks['black'] = $this->request->data['stocks']['black'];
    //     }

    //     if(isset($this->request->data['catchcopy']))
    //     {
    //         $catchcopy = $this->request->data['catchcopy'];
    //     }

    //     if(isset($this->request->data['resolution']['x']))
    //     {
    //         $resolutions['x'] = $this->request->data['resolution']['x'];
    //     }

    //     if(isset($this->request->data['specs']))
    //     {
    //         $specs = $this->request->data['specs'];
    //     }
    // }

    // function hikiwatasi()
    // {
    //     $this->set(
    //     array(
    //         'price'=>1500,
    //         'title'=>'商品詳細',
    //         'item'=>$this->Item->find(
    //             'first',
    //             array('conditions'=>array('Item.id' => 1))
    //         )
    //     )
    //         );
    // }
}