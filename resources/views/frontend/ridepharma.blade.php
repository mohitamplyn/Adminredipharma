@extends('layouts.master')
      
<x-frontend.header :data="$setting" />

<x-frontend.products :products="$products" />

<x-frontend.footer :data="$setting" />
