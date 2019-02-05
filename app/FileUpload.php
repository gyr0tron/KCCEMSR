<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class FileUpload extends Model
{
  protected $table = "fileuploads";
  public $timestamps = true;

  const admission_list = ['admission-criteria', 'fees-notices', 'institute-prospectus', 'dte-admission-information-brochure', 'cap-rount-allottment', 'direct-second-year', 'anti-ragging-affidavit', 'scholarship', 'mandatory-disclosure', 'aicte-affiliation', 'nirf-data', 'dte', 'university-affiliation', 'code-of-conduct', 'student-handbook', 'student-discipline', 'hr-handbook'];
  const admission_name_list = ['Admission Criteria', 'Fees Notices', 'Institute Prospectus', 'Dte Admission Information Brochure', 'Cap Rount Allottment', 'Direct Second Year', 'Anti Ragging Affidavit', 'Scholarship', 'Mandatory Disclosure', 'AICTE Affiliation', 'NIRF Data', 'DTE', 'University Affiliation' , 'Code Of Conduct', "Student Handbook", 'Student Discipline', 'HR Handbook'];

  const library_list = ['question-papers', 'e-books', 'syllabus', 'exam-notices', 'exam-timetable', 'exam-results'];
  const library_list_name = ['Question Papers', 'E-Books', 'Syllabus', 'Exam Notices', 'Exam Timetable', 'Exam Results'];

  public function getUrl($path="public/files/") {
    return url($path . $this->filename);
  }

  public function uploadFile($file, $filename="", $path="public/files/")
  {
    $this->checkDirs($path);
    if($filename=="") {
      $filename = $file->getClientOriginalName();
      if(file_exists(public_path($path) . $filename)) {
        $filename = str_replace('.' . $file->clientExtension(), '', $filename) .'-' . uniqid() . '.' . $file->clientExtension();
      }
    }else {
      $filename = $filename  . '.' . $file->clientExtension();
    }
    $file->move(public_path($path), $filename);
    return $filename;
  }

  public function checkDirs($path="public/files/") {
    $path = public_path($path);
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }

  public function deleteFile($path="public/files/")
  {
    $path = public_path($path);
    File::delete($path . $this->filename);
  }

  public function deleteFileByName($filename, $path="public/files/")
  {
    $path = public_path($path);
    File::delete($path . $filename);
  }

  public function getYear()
  {
    switch ($this->year) {
      case '1':
      return "FE";
      case '2':
      return "SE";
      case '3':
      return "TE";
      case '4':
      return "BE";
      default:
      return "Undefined";
    }
  }
  public static function getSectionArray()
  {
    $sections = [];
    for($i=2013;$i<date('Y');$i++) {
      array_push($sections, "May $i", "Dec $i");
    }
    if(date('n')>6) array_push($sections, "May $i");
    return $sections;
  }
}
