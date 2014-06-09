<?php
class redactor_dashboard extends wv48fv_action {
	public function commonWPmenuMeta($return) {
		$return ['menu'] = 'Settings';
		$return ['slug'] = $this->application ()->slug;
		$return ['title'] = $this->application ()->name;
		return $return;
	}
	public function settingsActionMeta($return) {
		$return ['link_name'] = $return ['title'];
		$return ['classes'] [] = 'v48fv_16x16_settings';
		$return ['priority'] = - 1;
		return $return;
	}
	public function settingsAction() {
		$this->view->title = $this->help('settings')->render('Settings');
		$this->view->column_count=5;
		if($this->application()->slug=='redactor')
		{
			$this->view->column_count=7;
		}
		$this->view->table_type=$this->application()->slug.'_list';
		$search_replace=$this->data()->post('search_replace');
		$this->view->columns = $this->render_script('common/columns.phtml');
		$phrases = $this->application ()->data ()->post ( 'phrases' );
		$this->view->cnt=0;
		foreach($phrases as $value)
		{
			
			$this->view->phrase=$value['phrase'];
			$this->view->style=$value['style'];
			$this->view->replacement=$value['replacement'];
			$this->view->priority=$value['priority'];
			$this->view->rows[] = $this->render_script('common/row.phtml');
			$this->view->cnt++;
		}		

		$this->view->footer = $this->render_script('common/footer.phtml');
		$page = $this->render_table();
		return $page;
	}
}
?>