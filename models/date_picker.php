<?php

  class DatePicker {
    var $MOUNTHES = array(
      1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
      5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
      9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
    );

    var $DAYS = array(
      'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
      'Четверг', 'Пятница', 'Суббота'
    );

    public function get_formatted_string($date) {
      $date = strtotime($date);
      return date('j', $date) . " " . $this->MOUNTHES[date('n', $date)];
    }

    public function get_week_day($date) {
      $date = strtotime($date);
      return $this->DAYS[date('w', $date)];
    }

    public function is_holiday($date) {
      $date = strtotime($date);
      if ((date('w', $date) == 0) || (date('w', $date) == 6)) {
        return true;
      } else {
        return false;
      }
    }

    public function increment_day($date) {
      return date('y-m-d', strtotime($date.' + 1 days'));
    }

    public function increment_mounth($date) {
      return date('y-m-d', strtotime($date.' + 30 days'));
    }
  }
