<?php

function setActive($routeName){
  return request()->routeIs($routeName) ? 'active': '';
  // return request()->path() . "-" . $routeName;
  // return request()->routeIs($routeName);
}
