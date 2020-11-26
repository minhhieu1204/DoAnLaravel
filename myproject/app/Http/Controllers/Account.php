<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function index()
    {
        $array = ["arrays"=>[
            ['id'=>0,'tieude'=>'Thủy Tiên ủng hộ miền Trung','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>1,'tieude'=>'Thủy tiên cho tiền mọi người ','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>2,'tieude'=>'Ronando ghi bàn phút 49','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>3,'tieude'=>'Thù tướng chính phủ ban hành lệnh......','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>4,'tieude'=>'Lễ hội nghinh ông ở cảng bình đại...','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>5,'tieude'=>'Doanh nghiệp trẻ thành đạt nhờ nuôi duối....','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi']
        ]];
        return view('pages.Accounts.indexAccount',$array);
    }
    public function addAccount()
    {
        $array = ["arrays"=>[
            ['id'=>0,'tieude'=>'Thủy Tiên ủng hộ miền Trung','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>1,'tieude'=>'Thủy tiên cho tiền mọi người ','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>2,'tieude'=>'Ronando ghi bàn phút 49','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>3,'tieude'=>'Thù tướng chính phủ ban hành lệnh......','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>4,'tieude'=>'Lễ hội nghinh ông ở cảng bình đại...','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>5,'tieude'=>'Doanh nghiệp trẻ thành đạt nhờ nuôi duối....','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi']
        ]];
        return view('pages.Accounts.addAccount',$array);
    }
    public function followAccount()
    {
        $array = ["arrays"=>[
            ['id'=>0,'tieude'=>'Thủy Tiên ủng hộ miền Trung','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>1,'tieude'=>'Thủy tiên cho tiền mọi người ','time'=>'T5 10-10-2020','mota'=>'quá trời hay luôn, vô coi thử đi'],
            ['id'=>2,'tieude'=>'Ronando ghi bàn phút 49','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>3,'tieude'=>'Thù tướng chính phủ ban hành lệnh......','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>4,'tieude'=>'Lễ hội nghinh ông ở cảng bình đại...','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi'],
            ['id'=>5,'tieude'=>'Doanh nghiệp trẻ thành đạt nhờ nuôi duối....','time'=>'T5 10-10-2020','mota'=>'vô coi thử đi']
        ]];
        return view('pages.Accounts.followAccount',$array);
    }
}
