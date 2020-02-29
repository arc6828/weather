<div class="form-group {{ $errors->has('Outfalls') ? 'has-error' : ''}}">
    <label for="Outfalls" class="control-label">{{ 'Outfalls' }}</label>
    <input class="form-control" name="Outfalls" type="file" id="Outfalls" value="{{ isset($weather->Outfalls) ? $weather->Outfalls : ''}}" >
    {!! $errors->first('Outfalls', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kmls') ? 'has-error' : ''}}">
    <label for="kmls" class="control-label">{{ 'Kmls' }}</label>
    <input class="form-control" name="kmls" type="file" id="kmls" value="{{ isset($weather->kmls) ? $weather->kmls : ''}}" >
    {!! $errors->first('kmls', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('profiles') ? 'has-error' : ''}}">
    <label for="profiles" class="control-label">{{ 'Profiles' }}</label>
    <input class="form-control" name="profiles" type="file" id="profiles" value="{{ isset($weather->profiles) ? $weather->profiles : ''}}" >
    {!! $errors->first('profiles', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('circular') ? 'has-error' : ''}}">
    <label for="circular" class="control-label">{{ 'Circular' }}</label>
    <input class="form-control" name="circular" type="text" id="circular" value="{{ isset($weather->circular) ? $weather->circular : ''}}" >
    {!! $errors->first('circular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxrougs') ? 'has-error' : ''}}">
    <label for="mxrougs" class="control-label">{{ 'Mxrougs' }}</label>
    <input class="form-control" name="mxrougs" type="text" id="mxrougs" value="{{ isset($weather->mxrougs) ? $weather->mxrougs : ''}}" >
    {!! $errors->first('mxrougs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mnrougs') ? 'has-error' : ''}}">
    <label for="mnrougs" class="control-label">{{ 'Mnrougs' }}</label>
    <input class="form-control" name="mnrougs" type="text" id="mnrougs" value="{{ isset($weather->mnrougs) ? $weather->mnrougs : ''}}" >
    {!! $errors->first('mnrougs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxenlefs') ? 'has-error' : ''}}">
    <label for="mxenlefs" class="control-label">{{ 'Mxenlefs' }}</label>
    <input class="form-control" name="mxenlefs" type="text" id="mxenlefs" value="{{ isset($weather->mxenlefs) ? $weather->mxenlefs : ''}}" >
    {!! $errors->first('mxenlefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mienlefs') ? 'has-error' : ''}}">
    <label for="mienlefs" class="control-label">{{ 'Mienlefs' }}</label>
    <input class="form-control" name="mienlefs" type="text" id="mienlefs" value="{{ isset($weather->mienlefs) ? $weather->mienlefs : ''}}" >
    {!! $errors->first('mienlefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxeloefs') ? 'has-error' : ''}}">
    <label for="mxeloefs" class="control-label">{{ 'Mxeloefs' }}</label>
    <input class="form-control" name="mxeloefs" type="text" id="mxeloefs" value="{{ isset($weather->mxeloefs) ? $weather->mxeloefs : ''}}" >
    {!! $errors->first('mxeloefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mneloefs') ? 'has-error' : ''}}">
    <label for="mneloefs" class="control-label">{{ 'Mneloefs' }}</label>
    <input class="form-control" name="mneloefs" type="text" id="mneloefs" value="{{ isset($weather->mneloefs) ? $weather->mneloefs : ''}}" >
    {!! $errors->first('mneloefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxaglefs') ? 'has-error' : ''}}">
    <label for="mxaglefs" class="control-label">{{ 'Mxaglefs' }}</label>
    <input class="form-control" name="mxaglefs" type="text" id="mxaglefs" value="{{ isset($weather->mxaglefs) ? $weather->mxaglefs : ''}}" >
    {!! $errors->first('mxaglefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('miaglefs') ? 'has-error' : ''}}">
    <label for="miaglefs" class="control-label">{{ 'Miaglefs' }}</label>
    <input class="form-control" name="miaglefs" type="text" id="miaglefs" value="{{ isset($weather->miaglefs) ? $weather->miaglefs : ''}}" >
    {!! $errors->first('miaglefs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxleths') ? 'has-error' : ''}}">
    <label for="mxleths" class="control-label">{{ 'Mxleths' }}</label>
    <input class="form-control" name="mxleths" type="text" id="mxleths" value="{{ isset($weather->mxleths) ? $weather->mxleths : ''}}" >
    {!! $errors->first('mxleths', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mileths') ? 'has-error' : ''}}">
    <label for="mileths" class="control-label">{{ 'Mileths' }}</label>
    <input class="form-control" name="mileths" type="text" id="mileths" value="{{ isset($weather->mileths) ? $weather->mileths : ''}}" >
    {!! $errors->first('mileths', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totallgth') ? 'has-error' : ''}}">
    <label for="totallgth" class="control-label">{{ 'Totallgth' }}</label>
    <input class="form-control" name="totallgth" type="text" id="totallgth" value="{{ isset($weather->totallgth) ? $weather->totallgth : ''}}" >
    {!! $errors->first('totallgth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxslope') ? 'has-error' : ''}}">
    <label for="mxslope" class="control-label">{{ 'Mxslope' }}</label>
    <input class="form-control" name="mxslope" type="text" id="mxslope" value="{{ isset($weather->mxslope) ? $weather->mxslope : ''}}" >
    {!! $errors->first('mxslope', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mislope') ? 'has-error' : ''}}">
    <label for="mislope" class="control-label">{{ 'Mislope' }}</label>
    <input class="form-control" name="mislope" type="text" id="mislope" value="{{ isset($weather->mislope) ? $weather->mislope : ''}}" >
    {!! $errors->first('mislope', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dryweaflow') ? 'has-error' : ''}}">
    <label for="dryweaflow" class="control-label">{{ 'Dryweaflow' }}</label>
    <input class="form-control" name="dryweaflow" type="text" id="dryweaflow" value="{{ isset($weather->dryweaflow) ? $weather->dryweaflow : ''}}" >
    {!! $errors->first('dryweaflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('wetweaflow') ? 'has-error' : ''}}">
    <label for="wetweaflow" class="control-label">{{ 'Wetweaflow' }}</label>
    <input class="form-control" name="wetweaflow" type="text" id="wetweaflow" value="{{ isset($weather->wetweaflow) ? $weather->wetweaflow : ''}}" >
    {!! $errors->first('wetweaflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('groundweaflow') ? 'has-error' : ''}}">
    <label for="groundweaflow" class="control-label">{{ 'Groundweaflow' }}</label>
    <input class="form-control" name="groundweaflow" type="text" id="groundweaflow" value="{{ isset($weather->groundweaflow) ? $weather->groundweaflow : ''}}" >
    {!! $errors->first('groundweaflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rdiiflow') ? 'has-error' : ''}}">
    <label for="rdiiflow" class="control-label">{{ 'Rdiiflow' }}</label>
    <input class="form-control" name="rdiiflow" type="text" id="rdiiflow" value="{{ isset($weather->rdiiflow) ? $weather->rdiiflow : ''}}" >
    {!! $errors->first('rdiiflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exnalflow') ? 'has-error' : ''}}">
    <label for="exnalflow" class="control-label">{{ 'Exnalflow' }}</label>
    <input class="form-control" name="exnalflow" type="text" id="exnalflow" value="{{ isset($weather->exnalflow) ? $weather->exnalflow : ''}}" >
    {!! $errors->first('exnalflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exnaloutflow') ? 'has-error' : ''}}">
    <label for="exnaloutflow" class="control-label">{{ 'Exnaloutflow' }}</label>
    <input class="form-control" name="exnaloutflow" type="text" id="exnaloutflow" value="{{ isset($weather->exnaloutflow) ? $weather->exnaloutflow : ''}}" >
    {!! $errors->first('exnaloutflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('floodloss') ? 'has-error' : ''}}">
    <label for="floodloss" class="control-label">{{ 'Floodloss' }}</label>
    <input class="form-control" name="floodloss" type="text" id="floodloss" value="{{ isset($weather->floodloss) ? $weather->floodloss : ''}}" >
    {!! $errors->first('floodloss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaloss') ? 'has-error' : ''}}">
    <label for="evaloss" class="control-label">{{ 'Evaloss' }}</label>
    <input class="form-control" name="evaloss" type="text" id="evaloss" value="{{ isset($weather->evaloss) ? $weather->evaloss : ''}}" >
    {!! $errors->first('evaloss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exfiltionloss') ? 'has-error' : ''}}">
    <label for="exfiltionloss" class="control-label">{{ 'Exfiltionloss' }}</label>
    <input class="form-control" name="exfiltionloss" type="text" id="exfiltionloss" value="{{ isset($weather->exfiltionloss) ? $weather->exfiltionloss : ''}}" >
    {!! $errors->first('exfiltionloss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lnitialvols') ? 'has-error' : ''}}">
    <label for="lnitialvols" class="control-label">{{ 'Lnitialvols' }}</label>
    <input class="form-control" name="lnitialvols" type="text" id="lnitialvols" value="{{ isset($weather->lnitialvols) ? $weather->lnitialvols : ''}}" >
    {!! $errors->first('lnitialvols', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('finalvols') ? 'has-error' : ''}}">
    <label for="finalvols" class="control-label">{{ 'Finalvols' }}</label>
    <input class="form-control" name="finalvols" type="text" id="finalvols" value="{{ isset($weather->finalvols) ? $weather->finalvols : ''}}" >
    {!! $errors->first('finalvols', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conerrors') ? 'has-error' : ''}}">
    <label for="conerrors" class="control-label">{{ 'Conerrors' }}</label>
    <input class="form-control" name="conerrors" type="text" id="conerrors" value="{{ isset($weather->conerrors) ? $weather->conerrors : ''}}" >
    {!! $errors->first('conerrors', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('timeflows') ? 'has-error' : ''}}">
    <label for="timeflows" class="control-label">{{ 'Timeflows' }}</label>
    <input class="form-control" name="timeflows" type="text" id="timeflows" value="{{ isset($weather->timeflows) ? $weather->timeflows : ''}}" >
    {!! $errors->first('timeflows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dryweaflows') ? 'has-error' : ''}}">
    <label for="dryweaflows" class="control-label">{{ 'Dryweaflows' }}</label>
    <input class="form-control" name="dryweaflows" type="text" id="dryweaflows" value="{{ isset($weather->dryweaflows) ? $weather->dryweaflows : ''}}" >
    {!! $errors->first('dryweaflows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('groundflows') ? 'has-error' : ''}}">
    <label for="groundflows" class="control-label">{{ 'Groundflows' }}</label>
    <input class="form-control" name="groundflows" type="text" id="groundflows" value="{{ isset($weather->groundflows) ? $weather->groundflows : ''}}" >
    {!! $errors->first('groundflows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rdiiflows') ? 'has-error' : ''}}">
    <label for="rdiiflows" class="control-label">{{ 'Rdiiflows' }}</label>
    <input class="form-control" name="rdiiflows" type="text" id="rdiiflows" value="{{ isset($weather->rdiiflows) ? $weather->rdiiflows : ''}}" >
    {!! $errors->first('rdiiflows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subments') ? 'has-error' : ''}}">
    <label for="subments" class="control-label">{{ 'Subments' }}</label>
    <input class="form-control" name="subments" type="text" id="subments" value="{{ isset($weather->subments) ? $weather->subments : ''}}" >
    {!! $errors->first('subments', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grounwter') ? 'has-error' : ''}}">
    <label for="grounwter" class="control-label">{{ 'Grounwter' }}</label>
    <input class="form-control" name="grounwter" type="text" id="grounwter" value="{{ isset($weather->grounwter) ? $weather->grounwter : ''}}" >
    {!! $errors->first('grounwter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_aquifers') ? 'has-error' : ''}}">
    <label for="complexity_aquifers" class="control-label">{{ 'Complexity Aquifers' }}</label>
    <input class="form-control" name="complexity_aquifers" type="text" id="complexity_aquifers" value="{{ isset($weather->complexity_aquifers) ? $weather->complexity_aquifers : ''}}" >
    {!! $errors->first('complexity_aquifers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_snows') ? 'has-error' : ''}}">
    <label for="complexity_snows" class="control-label">{{ 'Complexity Snows' }}</label>
    <input class="form-control" name="complexity_snows" type="text" id="complexity_snows" value="{{ isset($weather->complexity_snows) ? $weather->complexity_snows : ''}}" >
    {!! $errors->first('complexity_snows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_rdiigraphs') ? 'has-error' : ''}}">
    <label for="complexity_rdiigraphs" class="control-label">{{ 'Complexity Rdiigraphs' }}</label>
    <input class="form-control" name="complexity_rdiigraphs" type="text" id="complexity_rdiigraphs" value="{{ isset($weather->complexity_rdiigraphs) ? $weather->complexity_rdiigraphs : ''}}" >
    {!! $errors->first('complexity_rdiigraphs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_jundes') ? 'has-error' : ''}}">
    <label for="complexity_jundes" class="control-label">{{ 'Complexity Jundes' }}</label>
    <input class="form-control" name="complexity_jundes" type="text" id="complexity_jundes" value="{{ isset($weather->complexity_jundes) ? $weather->complexity_jundes : ''}}" >
    {!! $errors->first('complexity_jundes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_outdes') ? 'has-error' : ''}}">
    <label for="complexity_outdes" class="control-label">{{ 'Complexity Outdes' }}</label>
    <input class="form-control" name="complexity_outdes" type="text" id="complexity_outdes" value="{{ isset($weather->complexity_outdes) ? $weather->complexity_outdes : ''}}" >
    {!! $errors->first('complexity_outdes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_fldides') ? 'has-error' : ''}}">
    <label for="complexity_fldides" class="control-label">{{ 'Complexity Fldides' }}</label>
    <input class="form-control" name="complexity_fldides" type="text" id="complexity_fldides" value="{{ isset($weather->complexity_fldides) ? $weather->complexity_fldides : ''}}" >
    {!! $errors->first('complexity_fldides', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_storaundes') ? 'has-error' : ''}}">
    <label for="complexity_storaundes" class="control-label">{{ 'Complexity Storaundes' }}</label>
    <input class="form-control" name="complexity_storaundes" type="text" id="complexity_storaundes" value="{{ isset($weather->complexity_storaundes) ? $weather->complexity_storaundes : ''}}" >
    {!! $errors->first('complexity_storaundes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_conlinks') ? 'has-error' : ''}}">
    <label for="complexity_conlinks" class="control-label">{{ 'Complexity Conlinks' }}</label>
    <input class="form-control" name="complexity_conlinks" type="text" id="complexity_conlinks" value="{{ isset($weather->complexity_conlinks) ? $weather->complexity_conlinks : ''}}" >
    {!! $errors->first('complexity_conlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_pumplinks') ? 'has-error' : ''}}">
    <label for="complexity_pumplinks" class="control-label">{{ 'Complexity Pumplinks' }}</label>
    <input class="form-control" name="complexity_pumplinks" type="text" id="complexity_pumplinks" value="{{ isset($weather->complexity_pumplinks) ? $weather->complexity_pumplinks : ''}}" >
    {!! $errors->first('complexity_pumplinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_oriflinks') ? 'has-error' : ''}}">
    <label for="complexity_oriflinks" class="control-label">{{ 'Complexity Oriflinks' }}</label>
    <input class="form-control" name="complexity_oriflinks" type="text" id="complexity_oriflinks" value="{{ isset($weather->complexity_oriflinks) ? $weather->complexity_oriflinks : ''}}" >
    {!! $errors->first('complexity_oriflinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_weirlinks') ? 'has-error' : ''}}">
    <label for="complexity_weirlinks" class="control-label">{{ 'Complexity Weirlinks' }}</label>
    <input class="form-control" name="complexity_weirlinks" type="text" id="complexity_weirlinks" value="{{ isset($weather->complexity_weirlinks) ? $weather->complexity_weirlinks : ''}}" >
    {!! $errors->first('complexity_weirlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_outlinks') ? 'has-error' : ''}}">
    <label for="complexity_outlinks" class="control-label">{{ 'Complexity Outlinks' }}</label>
    <input class="form-control" name="complexity_outlinks" type="text" id="complexity_outlinks" value="{{ isset($weather->complexity_outlinks) ? $weather->complexity_outlinks : ''}}" >
    {!! $errors->first('complexity_outlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_transect') ? 'has-error' : ''}}">
    <label for="complexity_transect" class="control-label">{{ 'Complexity Transect' }}</label>
    <input class="form-control" name="complexity_transect" type="text" id="complexity_transect" value="{{ isset($weather->complexity_transect) ? $weather->complexity_transect : ''}}" >
    {!! $errors->first('complexity_transect', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_polluts') ? 'has-error' : ''}}">
    <label for="complexity_polluts" class="control-label">{{ 'Complexity Polluts' }}</label>
    <input class="form-control" name="complexity_polluts" type="text" id="complexity_polluts" value="{{ isset($weather->complexity_polluts) ? $weather->complexity_polluts : ''}}" >
    {!! $errors->first('complexity_polluts', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('complexity_landus') ? 'has-error' : ''}}">
    <label for="complexity_landus" class="control-label">{{ 'Complexity Landus' }}</label>
    <input class="form-control" name="complexity_landus" type="text" id="complexity_landus" value="{{ isset($weather->complexity_landus) ? $weather->complexity_landus : ''}}" >
    {!! $errors->first('complexity_landus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalcomity') ? 'has-error' : ''}}">
    <label for="totalcomity" class="control-label">{{ 'Totalcomity' }}</label>
    <input class="form-control" name="totalcomity" type="text" id="totalcomity" value="{{ isset($weather->totalcomity) ? $weather->totalcomity : ''}}" >
    {!! $errors->first('totalcomity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('raings') ? 'has-error' : ''}}">
    <label for="raings" class="control-label">{{ 'Raings' }}</label>
    <input class="form-control" name="raings" type="text" id="raings" value="{{ isset($weather->raings) ? $weather->raings : ''}}" >
    {!! $errors->first('raings', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_subments') ? 'has-error' : ''}}">
    <label for="inventory_subments" class="control-label">{{ 'Inventory Subments' }}</label>
    <input class="form-control" name="inventory_subments" type="text" id="inventory_subments" value="{{ isset($weather->inventory_subments) ? $weather->inventory_subments : ''}}" >
    {!! $errors->first('inventory_subments', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_aquifers') ? 'has-error' : ''}}">
    <label for="inventory_aquifers" class="control-label">{{ 'Inventory Aquifers' }}</label>
    <input class="form-control" name="inventory_aquifers" type="text" id="inventory_aquifers" value="{{ isset($weather->inventory_aquifers) ? $weather->inventory_aquifers : ''}}" >
    {!! $errors->first('inventory_aquifers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_snows') ? 'has-error' : ''}}">
    <label for="inventory_snows" class="control-label">{{ 'Inventory Snows' }}</label>
    <input class="form-control" name="inventory_snows" type="text" id="inventory_snows" value="{{ isset($weather->inventory_snows) ? $weather->inventory_snows : ''}}" >
    {!! $errors->first('inventory_snows', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_rdiigraphs') ? 'has-error' : ''}}">
    <label for="inventory_rdiigraphs" class="control-label">{{ 'Inventory Rdiigraphs' }}</label>
    <input class="form-control" name="inventory_rdiigraphs" type="text" id="inventory_rdiigraphs" value="{{ isset($weather->inventory_rdiigraphs) ? $weather->inventory_rdiigraphs : ''}}" >
    {!! $errors->first('inventory_rdiigraphs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_jundes') ? 'has-error' : ''}}">
    <label for="inventory_jundes" class="control-label">{{ 'Inventory Jundes' }}</label>
    <input class="form-control" name="inventory_jundes" type="text" id="inventory_jundes" value="{{ isset($weather->inventory_jundes) ? $weather->inventory_jundes : ''}}" >
    {!! $errors->first('inventory_jundes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_outdes') ? 'has-error' : ''}}">
    <label for="inventory_outdes" class="control-label">{{ 'Inventory Outdes' }}</label>
    <input class="form-control" name="inventory_outdes" type="text" id="inventory_outdes" value="{{ isset($weather->inventory_outdes) ? $weather->inventory_outdes : ''}}" >
    {!! $errors->first('inventory_outdes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_fldides') ? 'has-error' : ''}}">
    <label for="inventory_fldides" class="control-label">{{ 'Inventory Fldides' }}</label>
    <input class="form-control" name="inventory_fldides" type="text" id="inventory_fldides" value="{{ isset($weather->inventory_fldides) ? $weather->inventory_fldides : ''}}" >
    {!! $errors->first('inventory_fldides', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_storaundes') ? 'has-error' : ''}}">
    <label for="inventory_storaundes" class="control-label">{{ 'Inventory Storaundes' }}</label>
    <input class="form-control" name="inventory_storaundes" type="text" id="inventory_storaundes" value="{{ isset($weather->inventory_storaundes) ? $weather->inventory_storaundes : ''}}" >
    {!! $errors->first('inventory_storaundes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_conlinks') ? 'has-error' : ''}}">
    <label for="inventory_conlinks" class="control-label">{{ 'Inventory Conlinks' }}</label>
    <input class="form-control" name="inventory_conlinks" type="text" id="inventory_conlinks" value="{{ isset($weather->inventory_conlinks) ? $weather->inventory_conlinks : ''}}" >
    {!! $errors->first('inventory_conlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_pumplinks') ? 'has-error' : ''}}">
    <label for="inventory_pumplinks" class="control-label">{{ 'Inventory Pumplinks' }}</label>
    <input class="form-control" name="inventory_pumplinks" type="text" id="inventory_pumplinks" value="{{ isset($weather->inventory_pumplinks) ? $weather->inventory_pumplinks : ''}}" >
    {!! $errors->first('inventory_pumplinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_oriflinks') ? 'has-error' : ''}}">
    <label for="inventory_oriflinks" class="control-label">{{ 'Inventory Oriflinks' }}</label>
    <input class="form-control" name="inventory_oriflinks" type="text" id="inventory_oriflinks" value="{{ isset($weather->inventory_oriflinks) ? $weather->inventory_oriflinks : ''}}" >
    {!! $errors->first('inventory_oriflinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_weirlinks') ? 'has-error' : ''}}">
    <label for="inventory_weirlinks" class="control-label">{{ 'Inventory Weirlinks' }}</label>
    <input class="form-control" name="inventory_weirlinks" type="text" id="inventory_weirlinks" value="{{ isset($weather->inventory_weirlinks) ? $weather->inventory_weirlinks : ''}}" >
    {!! $errors->first('inventory_weirlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_outlinks') ? 'has-error' : ''}}">
    <label for="inventory_outlinks" class="control-label">{{ 'Inventory Outlinks' }}</label>
    <input class="form-control" name="inventory_outlinks" type="text" id="inventory_outlinks" value="{{ isset($weather->inventory_outlinks) ? $weather->inventory_outlinks : ''}}" >
    {!! $errors->first('inventory_outlinks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_treunits') ? 'has-error' : ''}}">
    <label for="inventory_treunits" class="control-label">{{ 'Inventory Treunits' }}</label>
    <input class="form-control" name="inventory_treunits" type="text" id="inventory_treunits" value="{{ isset($weather->inventory_treunits) ? $weather->inventory_treunits : ''}}" >
    {!! $errors->first('inventory_treunits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_transect') ? 'has-error' : ''}}">
    <label for="inventory_transect" class="control-label">{{ 'Inventory Transect' }}</label>
    <input class="form-control" name="inventory_transect" type="text" id="inventory_transect" value="{{ isset($weather->inventory_transect) ? $weather->inventory_transect : ''}}" >
    {!! $errors->first('inventory_transect', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_conruls') ? 'has-error' : ''}}">
    <label for="inventory_conruls" class="control-label">{{ 'Inventory Conruls' }}</label>
    <input class="form-control" name="inventory_conruls" type="text" id="inventory_conruls" value="{{ isset($weather->inventory_conruls) ? $weather->inventory_conruls : ''}}" >
    {!! $errors->first('inventory_conruls', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_polluts') ? 'has-error' : ''}}">
    <label for="inventory_polluts" class="control-label">{{ 'Inventory Polluts' }}</label>
    <input class="form-control" name="inventory_polluts" type="text" id="inventory_polluts" value="{{ isset($weather->inventory_polluts) ? $weather->inventory_polluts : ''}}" >
    {!! $errors->first('inventory_polluts', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inventory_landus') ? 'has-error' : ''}}">
    <label for="inventory_landus" class="control-label">{{ 'Inventory Landus' }}</label>
    <input class="form-control" name="inventory_landus" type="text" id="inventory_landus" value="{{ isset($weather->inventory_landus) ? $weather->inventory_landus : ''}}" >
    {!! $errors->first('inventory_landus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conves') ? 'has-error' : ''}}">
    <label for="conves" class="control-label">{{ 'Conves' }}</label>
    <input class="form-control" name="conves" type="text" id="conves" value="{{ isset($weather->conves) ? $weather->conves : ''}}" >
    {!! $errors->first('conves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('divsionves') ? 'has-error' : ''}}">
    <label for="divsionves" class="control-label">{{ 'Divsionves' }}</label>
    <input class="form-control" name="divsionves" type="text" id="divsionves" value="{{ isset($weather->divsionves) ? $weather->divsionves : ''}}" >
    {!! $errors->first('divsionves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pumpves') ? 'has-error' : ''}}">
    <label for="pumpves" class="control-label">{{ 'Pumpves' }}</label>
    <input class="form-control" name="pumpves" type="text" id="pumpves" value="{{ isset($weather->pumpves) ? $weather->pumpves : ''}}" >
    {!! $errors->first('pumpves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ratingves') ? 'has-error' : ''}}">
    <label for="ratingves" class="control-label">{{ 'Ratingves' }}</label>
    <input class="form-control" name="ratingves" type="text" id="ratingves" value="{{ isset($weather->ratingves) ? $weather->ratingves : ''}}" >
    {!! $errors->first('ratingves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('shapeves') ? 'has-error' : ''}}">
    <label for="shapeves" class="control-label">{{ 'Shapeves' }}</label>
    <input class="form-control" name="shapeves" type="text" id="shapeves" value="{{ isset($weather->shapeves) ? $weather->shapeves : ''}}" >
    {!! $errors->first('shapeves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('strogves') ? 'has-error' : ''}}">
    <label for="strogves" class="control-label">{{ 'Strogves' }}</label>
    <input class="form-control" name="strogves" type="text" id="strogves" value="{{ isset($weather->strogves) ? $weather->strogves : ''}}" >
    {!! $errors->first('strogves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tidalves') ? 'has-error' : ''}}">
    <label for="tidalves" class="control-label">{{ 'Tidalves' }}</label>
    <input class="form-control" name="tidalves" type="text" id="tidalves" value="{{ isset($weather->tidalves) ? $weather->tidalves : ''}}" >
    {!! $errors->first('tidalves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('weirves') ? 'has-error' : ''}}">
    <label for="weirves" class="control-label">{{ 'Weirves' }}</label>
    <input class="form-control" name="weirves" type="text" id="weirves" value="{{ isset($weather->weirves) ? $weather->weirves : ''}}" >
    {!! $errors->first('weirves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('timeseries') ? 'has-error' : ''}}">
    <label for="timeseries" class="control-label">{{ 'Timeseries' }}</label>
    <input class="form-control" name="timeseries" type="text" id="timeseries" value="{{ isset($weather->timeseries) ? $weather->timeseries : ''}}" >
    {!! $errors->first('timeseries', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('timepatns') ? 'has-error' : ''}}">
    <label for="timepatns" class="control-label">{{ 'Timepatns' }}</label>
    <input class="form-control" name="timepatns" type="text" id="timepatns" value="{{ isset($weather->timepatns) ? $weather->timepatns : ''}}" >
    {!! $errors->first('timepatns', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxgroudev') ? 'has-error' : ''}}">
    <label for="mxgroudev" class="control-label">{{ 'Mxgroudev' }}</label>
    <input class="form-control" name="mxgroudev" type="text" id="mxgroudev" value="{{ isset($weather->mxgroudev) ? $weather->mxgroudev : ''}}" >
    {!! $errors->first('mxgroudev', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mngroudev') ? 'has-error' : ''}}">
    <label for="mngroudev" class="control-label">{{ 'Mngroudev' }}</label>
    <input class="form-control" name="mngroudev" type="text" id="mngroudev" value="{{ isset($weather->mngroudev) ? $weather->mngroudev : ''}}" >
    {!! $errors->first('mngroudev', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxvertev') ? 'has-error' : ''}}">
    <label for="mxvertev" class="control-label">{{ 'Mxvertev' }}</label>
    <input class="form-control" name="mxvertev" type="text" id="mxvertev" value="{{ isset($weather->mxvertev) ? $weather->mxvertev : ''}}" >
    {!! $errors->first('mxvertev', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mnvertev') ? 'has-error' : ''}}">
    <label for="mnvertev" class="control-label">{{ 'Mnvertev' }}</label>
    <input class="form-control" name="mnvertev" type="text" id="mnvertev" value="{{ isset($weather->mnvertev) ? $weather->mnvertev : ''}}" >
    {!! $errors->first('mnvertev', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxdepth') ? 'has-error' : ''}}">
    <label for="mxdepth" class="control-label">{{ 'Mxdepth' }}</label>
    <input class="form-control" name="mxdepth" type="text" id="mxdepth" value="{{ isset($weather->mxdepth) ? $weather->mxdepth : ''}}" >
    {!! $errors->first('mxdepth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('midepth') ? 'has-error' : ''}}">
    <label for="midepth" class="control-label">{{ 'Midepth' }}</label>
    <input class="form-control" name="midepth" type="text" id="midepth" value="{{ isset($weather->midepth) ? $weather->midepth : ''}}" >
    {!! $errors->first('midepth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('flowunits') ? 'has-error' : ''}}">
    <label for="flowunits" class="control-label">{{ 'Flowunits' }}</label>
    <input class="form-control" name="flowunits" type="text" id="flowunits" value="{{ isset($weather->flowunits) ? $weather->flowunits : ''}}" >
    {!! $errors->first('flowunits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inftionmet') ? 'has-error' : ''}}">
    <label for="inftionmet" class="control-label">{{ 'Inftionmet' }}</label>
    <input class="form-control" name="inftionmet" type="text" id="inftionmet" value="{{ isset($weather->inftionmet) ? $weather->inftionmet : ''}}" >
    {!! $errors->first('inftionmet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('flowtingmet') ? 'has-error' : ''}}">
    <label for="flowtingmet" class="control-label">{{ 'Flowtingmet' }}</label>
    <input class="form-control" name="flowtingmet" type="text" id="flowtingmet" value="{{ isset($weather->flowtingmet) ? $weather->flowtingmet : ''}}" >
    {!! $errors->first('flowtingmet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkoffsetsned') ? 'has-error' : ''}}">
    <label for="linkoffsetsned" class="control-label">{{ 'Linkoffsetsned' }}</label>
    <input class="form-control" name="linkoffsetsned" type="text" id="linkoffsetsned" value="{{ isset($weather->linkoffsetsned) ? $weather->linkoffsetsned : ''}}" >
    {!! $errors->first('linkoffsetsned', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('allowding') ? 'has-error' : ''}}">
    <label for="allowding" class="control-label">{{ 'Allowding' }}</label>
    <input class="form-control" name="allowding" type="text" id="allowding" value="{{ isset($weather->allowding) ? $weather->allowding : ''}}" >
    {!! $errors->first('allowding', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('skipflowds') ? 'has-error' : ''}}">
    <label for="skipflowds" class="control-label">{{ 'Skipflowds' }}</label>
    <input class="form-control" name="skipflowds" type="text" id="skipflowds" value="{{ isset($weather->skipflowds) ? $weather->skipflowds : ''}}" >
    {!! $errors->first('skipflowds', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inertialing') ? 'has-error' : ''}}">
    <label for="inertialing" class="control-label">{{ 'Inertialing' }}</label>
    <input class="form-control" name="inertialing" type="text" id="inertialing" value="{{ isset($weather->inertialing) ? $weather->inertialing : ''}}" >
    {!! $errors->first('inertialing', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('defineflow') ? 'has-error' : ''}}">
    <label for="defineflow" class="control-label">{{ 'Defineflow' }}</label>
    <input class="form-control" name="defineflow" type="text" id="defineflow" value="{{ isset($weather->defineflow) ? $weather->defineflow : ''}}" >
    {!! $errors->first('defineflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('forcetion') ? 'has-error' : ''}}">
    <label for="forcetion" class="control-label">{{ 'Forcetion' }}</label>
    <input class="form-control" name="forcetion" type="text" id="forcetion" value="{{ isset($weather->forcetion) ? $weather->forcetion : ''}}" >
    {!! $errors->first('forcetion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('variable') ? 'has-error' : ''}}">
    <label for="variable" class="control-label">{{ 'Variable' }}</label>
    <input class="form-control" name="variable" type="text" id="variable" value="{{ isset($weather->variable) ? $weather->variable : ''}}" >
    {!! $errors->first('variable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('adjustment') ? 'has-error' : ''}}">
    <label for="adjustment" class="control-label">{{ 'Adjustment' }}</label>
    <input class="form-control" name="adjustment" type="text" id="adjustment" value="{{ isset($weather->adjustment) ? $weather->adjustment : ''}}" >
    {!! $errors->first('adjustment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conduit') ? 'has-error' : ''}}">
    <label for="conduit" class="control-label">{{ 'Conduit' }}</label>
    <input class="form-control" name="conduit" type="text" id="conduit" value="{{ isset($weather->conduit) ? $weather->conduit : ''}}" >
    {!! $errors->first('conduit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('surface') ? 'has-error' : ''}}">
    <label for="surface" class="control-label">{{ 'Surface' }}</label>
    <input class="form-control" name="surface" type="text" id="surface" value="{{ isset($weather->surface) ? $weather->surface : ''}}" >
    {!! $errors->first('surface', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('startingdate') ? 'has-error' : ''}}">
    <label for="startingdate" class="control-label">{{ 'Startingdate' }}</label>
    <input class="form-control" name="startingdate" type="text" id="startingdate" value="{{ isset($weather->startingdate) ? $weather->startingdate : ''}}" >
    {!! $errors->first('startingdate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('endingdate') ? 'has-error' : ''}}">
    <label for="endingdate" class="control-label">{{ 'Endingdate' }}</label>
    <input class="form-control" name="endingdate" type="text" id="endingdate" value="{{ isset($weather->endingdate) ? $weather->endingdate : ''}}" >
    {!! $errors->first('endingdate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    <label for="duration" class="control-label">{{ 'Duration' }}</label>
    <input class="form-control" name="duration" type="text" id="duration" value="{{ isset($weather->duration) ? $weather->duration : ''}}" >
    {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('antecedent') ? 'has-error' : ''}}">
    <label for="antecedent" class="control-label">{{ 'Antecedent' }}</label>
    <input class="form-control" name="antecedent" type="text" id="antecedent" value="{{ isset($weather->antecedent) ? $weather->antecedent : ''}}" >
    {!! $errors->first('antecedent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rain') ? 'has-error' : ''}}">
    <label for="rain" class="control-label">{{ 'Rain' }}</label>
    <input class="form-control" name="rain" type="text" id="rain" value="{{ isset($weather->rain) ? $weather->rain : ''}}" >
    {!! $errors->first('rain', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reporttime') ? 'has-error' : ''}}">
    <label for="reporttime" class="control-label">{{ 'Reporttime' }}</label>
    <input class="form-control" name="reporttime" type="text" id="reporttime" value="{{ isset($weather->reporttime) ? $weather->reporttime : ''}}" >
    {!! $errors->first('reporttime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('wettime') ? 'has-error' : ''}}">
    <label for="wettime" class="control-label">{{ 'Wettime' }}</label>
    <input class="form-control" name="wettime" type="text" id="wettime" value="{{ isset($weather->wettime) ? $weather->wettime : ''}}" >
    {!! $errors->first('wettime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drytime') ? 'has-error' : ''}}">
    <label for="drytime" class="control-label">{{ 'Drytime' }}</label>
    <input class="form-control" name="drytime" type="text" id="drytime" value="{{ isset($weather->drytime) ? $weather->drytime : ''}}" >
    {!! $errors->first('drytime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('routingtime') ? 'has-error' : ''}}">
    <label for="routingtime" class="control-label">{{ 'Routingtime' }}</label>
    <input class="form-control" name="routingtime" type="text" id="routingtime" value="{{ isset($weather->routingtime) ? $weather->routingtime : ''}}" >
    {!! $errors->first('routingtime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minimumtime') ? 'has-error' : ''}}">
    <label for="minimumtime" class="control-label">{{ 'Minimumtime' }}</label>
    <input class="form-control" name="minimumtime" type="text" id="minimumtime" value="{{ isset($weather->minimumtime) ? $weather->minimumtime : ''}}" >
    {!! $errors->first('minimumtime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('avgtime') ? 'has-error' : ''}}">
    <label for="avgtime" class="control-label">{{ 'Avgtime' }}</label>
    <input class="form-control" name="avgtime" type="text" id="avgtime" value="{{ isset($weather->avgtime) ? $weather->avgtime : ''}}" >
    {!! $errors->first('avgtime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minimumcons') ? 'has-error' : ''}}">
    <label for="minimumcons" class="control-label">{{ 'Minimumcons' }}</label>
    <input class="form-control" name="minimumcons" type="text" id="minimumcons" value="{{ isset($weather->minimumcons) ? $weather->minimumcons : ''}}" >
    {!! $errors->first('minimumcons', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lgnoreofs') ? 'has-error' : ''}}">
    <label for="lgnoreofs" class="control-label">{{ 'Lgnoreofs' }}</label>
    <input class="form-control" name="lgnoreofs" type="text" id="lgnoreofs" value="{{ isset($weather->lgnoreofs) ? $weather->lgnoreofs : ''}}" >
    {!! $errors->first('lgnoreofs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lgnoremelt') ? 'has-error' : ''}}">
    <label for="lgnoremelt" class="control-label">{{ 'Lgnoremelt' }}</label>
    <input class="form-control" name="lgnoremelt" type="text" id="lgnoremelt" value="{{ isset($weather->lgnoremelt) ? $weather->lgnoremelt : ''}}" >
    {!! $errors->first('lgnoremelt', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lgnoreter') ? 'has-error' : ''}}">
    <label for="lgnoreter" class="control-label">{{ 'Lgnoreter' }}</label>
    <input class="form-control" name="lgnoreter" type="text" id="lgnoreter" value="{{ isset($weather->lgnoreter) ? $weather->lgnoreter : ''}}" >
    {!! $errors->first('lgnoreter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lgnoreing') ? 'has-error' : ''}}">
    <label for="lgnoreing" class="control-label">{{ 'Lgnoreing' }}</label>
    <input class="form-control" name="lgnoreing" type="text" id="lgnoreing" value="{{ isset($weather->lgnoreing) ? $weather->lgnoreing : ''}}" >
    {!! $errors->first('lgnoreing', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lgnorety') ? 'has-error' : ''}}">
    <label for="lgnorety" class="control-label">{{ 'Lgnorety' }}</label>
    <input class="form-control" name="lgnorety" type="text" id="lgnorety" value="{{ isset($weather->lgnorety) ? $weather->lgnorety : ''}}" >
    {!! $errors->first('lgnorety', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reportavgs') ? 'has-error' : ''}}">
    <label for="reportavgs" class="control-label">{{ 'Reportavgs' }}</label>
    <input class="form-control" name="reportavgs" type="text" id="reportavgs" value="{{ isset($weather->reportavgs) ? $weather->reportavgs : ''}}" >
    {!! $errors->first('reportavgs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxpipeter') ? 'has-error' : ''}}">
    <label for="mxpipeter" class="control-label">{{ 'Mxpipeter' }}</label>
    <input class="form-control" name="mxpipeter" type="text" id="mxpipeter" value="{{ isset($weather->mxpipeter) ? $weather->mxpipeter : ''}}" >
    {!! $errors->first('mxpipeter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mnpipditer') ? 'has-error' : ''}}">
    <label for="mnpipditer" class="control-label">{{ 'Mnpipditer' }}</label>
    <input class="form-control" name="mnpipditer" type="text" id="mnpipditer" value="{{ isset($weather->mnpipditer) ? $weather->mnpipditer : ''}}" >
    {!! $errors->first('mnpipditer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalpipeth') ? 'has-error' : ''}}">
    <label for="totalpipeth" class="control-label">{{ 'Totalpipeth' }}</label>
    <input class="form-control" name="totalpipeth" type="text" id="totalpipeth" value="{{ isset($weather->totalpipeth) ? $weather->totalpipeth : ''}}" >
    {!! $errors->first('totalpipeth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalotherth') ? 'has-error' : ''}}">
    <label for="totalotherth" class="control-label">{{ 'Totalotherth' }}</label>
    <input class="form-control" name="totalotherth" type="text" id="totalotherth" value="{{ isset($weather->totalotherth) ? $weather->totalotherth : ''}}" >
    {!! $errors->first('totalotherth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalpipth') ? 'has-error' : ''}}">
    <label for="totalpipth" class="control-label">{{ 'Totalpipth' }}</label>
    <input class="form-control" name="totalpipth" type="text" id="totalpipth" value="{{ isset($weather->totalpipth) ? $weather->totalpipth : ''}}" >
    {!! $errors->first('totalpipth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxmg') ? 'has-error' : ''}}">
    <label for="maxmg" class="control-label">{{ 'Maxmg' }}</label>
    <input class="form-control" name="maxmg" type="text" id="maxmg" value="{{ isset($weather->maxmg) ? $weather->maxmg : ''}}" >
    {!! $errors->first('maxmg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxcfs') ? 'has-error' : ''}}">
    <label for="maxcfs" class="control-label">{{ 'Maxcfs' }}</label>
    <input class="form-control" name="maxcfs" type="text" id="maxcfs" value="{{ isset($weather->maxcfs) ? $weather->maxcfs : ''}}" >
    {!! $errors->first('maxcfs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxcoeffnt') ? 'has-error' : ''}}">
    <label for="maxcoeffnt" class="control-label">{{ 'Maxcoeffnt' }}</label>
    <input class="form-control" name="maxcoeffnt" type="text" id="maxcoeffnt" value="{{ isset($weather->maxcoeffnt) ? $weather->maxcoeffnt : ''}}" >
    {!! $errors->first('maxcoeffnt', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxin') ? 'has-error' : ''}}">
    <label for="maxin" class="control-label">{{ 'Maxin' }}</label>
    <input class="form-control" name="maxin" type="text" id="maxin" value="{{ isset($weather->maxin) ? $weather->maxin : ''}}" >
    {!! $errors->first('maxin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minin') ? 'has-error' : ''}}">
    <label for="minin" class="control-label">{{ 'Minin' }}</label>
    <input class="form-control" name="minin" type="text" id="minin" value="{{ isset($weather->minin) ? $weather->minin : ''}}" >
    {!! $errors->first('minin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mxnode') ? 'has-error' : ''}}">
    <label for="mxnode" class="control-label">{{ 'Mxnode' }}</label>
    <input class="form-control" name="mxnode" type="text" id="mxnode" value="{{ isset($weather->mxnode) ? $weather->mxnode : ''}}" >
    {!! $errors->first('mxnode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('surcharged') ? 'has-error' : ''}}">
    <label for="surcharged" class="control-label">{{ 'Surcharged' }}</label>
    <input class="form-control" name="surcharged" type="text" id="surcharged" value="{{ isset($weather->surcharged) ? $weather->surcharged : ''}}" >
    {!! $errors->first('surcharged', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nodesurched') ? 'has-error' : ''}}">
    <label for="nodesurched" class="control-label">{{ 'Nodesurched' }}</label>
    <input class="form-control" name="nodesurched" type="text" id="nodesurched" value="{{ isset($weather->nodesurched) ? $weather->nodesurched : ''}}" >
    {!! $errors->first('nodesurched', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxcrown') ? 'has-error' : ''}}">
    <label for="maxcrown" class="control-label">{{ 'Maxcrown' }}</label>
    <input class="form-control" name="maxcrown" type="text" id="maxcrown" value="{{ isset($weather->maxcrown) ? $weather->maxcrown : ''}}" >
    {!! $errors->first('maxcrown', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minbelow') ? 'has-error' : ''}}">
    <label for="minbelow" class="control-label">{{ 'Minbelow' }}</label>
    <input class="form-control" name="minbelow" type="text" id="minbelow" value="{{ isset($weather->minbelow) ? $weather->minbelow : ''}}" >
    {!! $errors->first('minbelow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('flooded') ? 'has-error' : ''}}">
    <label for="flooded" class="control-label">{{ 'Flooded' }}</label>
    <input class="form-control" name="flooded" type="text" id="flooded" value="{{ isset($weather->flooded) ? $weather->flooded : ''}}" >
    {!! $errors->first('flooded', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('flooding') ? 'has-error' : ''}}">
    <label for="flooding" class="control-label">{{ 'Flooding' }}</label>
    <input class="form-control" name="flooding" type="text" id="flooding" value="{{ isset($weather->flooding) ? $weather->flooding : ''}}" >
    {!! $errors->first('flooding', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('floodmg') ? 'has-error' : ''}}">
    <label for="floodmg" class="control-label">{{ 'Floodmg' }}</label>
    <input class="form-control" name="floodmg" type="text" id="floodmg" value="{{ isset($weather->floodmg) ? $weather->floodmg : ''}}" >
    {!! $errors->first('floodmg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pondedvolume') ? 'has-error' : ''}}">
    <label for="pondedvolume" class="control-label">{{ 'Pondedvolume' }}</label>
    <input class="form-control" name="pondedvolume" type="text" id="pondedvolume" value="{{ isset($weather->pondedvolume) ? $weather->pondedvolume : ''}}" >
    {!! $errors->first('pondedvolume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxvolume') ? 'has-error' : ''}}">
    <label for="maxvolume" class="control-label">{{ 'Maxvolume' }}</label>
    <input class="form-control" name="maxvolume" type="text" id="maxvolume" value="{{ isset($weather->maxvolume) ? $weather->maxvolume : ''}}" >
    {!! $errors->first('maxvolume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxperfull') ? 'has-error' : ''}}">
    <label for="maxperfull" class="control-label">{{ 'Maxperfull' }}</label>
    <input class="form-control" name="maxperfull" type="text" id="maxperfull" value="{{ isset($weather->maxperfull) ? $weather->maxperfull : ''}}" >
    {!! $errors->first('maxperfull', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxfrecy') ? 'has-error' : ''}}">
    <label for="maxfrecy" class="control-label">{{ 'Maxfrecy' }}</label>
    <input class="form-control" name="maxfrecy" type="text" id="maxfrecy" value="{{ isset($weather->maxfrecy) ? $weather->maxfrecy : ''}}" >
    {!! $errors->first('maxfrecy', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxflow') ? 'has-error' : ''}}">
    <label for="maxflow" class="control-label">{{ 'Maxflow' }}</label>
    <input class="form-control" name="maxflow" type="text" id="maxflow" value="{{ isset($weather->maxflow) ? $weather->maxflow : ''}}" >
    {!! $errors->first('maxflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxoutfallmg') ? 'has-error' : ''}}">
    <label for="maxoutfallmg" class="control-label">{{ 'Maxoutfallmg' }}</label>
    <input class="form-control" name="maxoutfallmg" type="text" id="maxoutfallmg" value="{{ isset($weather->maxoutfallmg) ? $weather->maxoutfallmg : ''}}" >
    {!! $errors->first('maxoutfallmg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmg') ? 'has-error' : ''}}">
    <label for="totalmg" class="control-label">{{ 'Totalmg' }}</label>
    <input class="form-control" name="totalmg" type="text" id="totalmg" value="{{ isset($weather->totalmg) ? $weather->totalmg : ''}}" >
    {!! $errors->first('totalmg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxpeak') ? 'has-error' : ''}}">
    <label for="maxpeak" class="control-label">{{ 'Maxpeak' }}</label>
    <input class="form-control" name="maxpeak" type="text" id="maxpeak" value="{{ isset($weather->maxpeak) ? $weather->maxpeak : ''}}" >
    {!! $errors->first('maxpeak', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxlinkty') ? 'has-error' : ''}}">
    <label for="maxlinkty" class="control-label">{{ 'Maxlinkty' }}</label>
    <input class="form-control" name="maxlinkty" type="text" id="maxlinkty" value="{{ isset($weather->maxlinkty) ? $weather->maxlinkty : ''}}" >
    {!! $errors->first('maxlinkty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minpeakty') ? 'has-error' : ''}}">
    <label for="minpeakty" class="control-label">{{ 'Minpeakty' }}</label>
    <input class="form-control" name="minpeakty" type="text" id="minpeakty" value="{{ isset($weather->minpeakty) ? $weather->minpeakty : ''}}" >
    {!! $errors->first('minpeakty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conduits') ? 'has-error' : ''}}">
    <label for="conduits" class="control-label">{{ 'Conduits' }}</label>
    <input class="form-control" name="conduits" type="text" id="conduits" value="{{ isset($weather->conduits) ? $weather->conduits : ''}}" >
    {!! $errors->first('conduits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxconduits') ? 'has-error' : ''}}">
    <label for="maxconduits" class="control-label">{{ 'Maxconduits' }}</label>
    <input class="form-control" name="maxconduits" type="text" id="maxconduits" value="{{ isset($weather->maxconduits) ? $weather->maxconduits : ''}}" >
    {!! $errors->first('maxconduits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxcapacity') ? 'has-error' : ''}}">
    <label for="maxcapacity" class="control-label">{{ 'Maxcapacity' }}</label>
    <input class="form-control" name="maxcapacity" type="text" id="maxcapacity" value="{{ isset($weather->maxcapacity) ? $weather->maxcapacity : ''}}" >
    {!! $errors->first('maxcapacity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lidstroage') ? 'has-error' : ''}}">
    <label for="lidstroage" class="control-label">{{ 'Lidstroage' }}</label>
    <input class="form-control" name="lidstroage" type="text" id="lidstroage" value="{{ isset($weather->lidstroage) ? $weather->lidstroage : ''}}" >
    {!! $errors->first('lidstroage', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('snowcover') ? 'has-error' : ''}}">
    <label for="snowcover" class="control-label">{{ 'Snowcover' }}</label>
    <input class="form-control" name="snowcover" type="text" id="snowcover" value="{{ isset($weather->snowcover) ? $weather->snowcover : ''}}" >
    {!! $errors->first('snowcover', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalin') ? 'has-error' : ''}}">
    <label for="totalin" class="control-label">{{ 'Totalin' }}</label>
    <input class="form-control" name="totalin" type="text" id="totalin" value="{{ isset($weather->totalin) ? $weather->totalin : ''}}" >
    {!! $errors->first('totalin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('runonin') ? 'has-error' : ''}}">
    <label for="runonin" class="control-label">{{ 'Runonin' }}</label>
    <input class="form-control" name="runonin" type="text" id="runonin" value="{{ isset($weather->runonin) ? $weather->runonin : ''}}" >
    {!! $errors->first('runonin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evalossin') ? 'has-error' : ''}}">
    <label for="evalossin" class="control-label">{{ 'Evalossin' }}</label>
    <input class="form-control" name="evalossin" type="text" id="evalossin" value="{{ isset($weather->evalossin) ? $weather->evalossin : ''}}" >
    {!! $errors->first('evalossin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('infitionloss') ? 'has-error' : ''}}">
    <label for="infitionloss" class="control-label">{{ 'Infitionloss' }}</label>
    <input class="form-control" name="infitionloss" type="text" id="infitionloss" value="{{ isset($weather->infitionloss) ? $weather->infitionloss : ''}}" >
    {!! $errors->first('infitionloss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('surfacein') ? 'has-error' : ''}}">
    <label for="surfacein" class="control-label">{{ 'Surfacein' }}</label>
    <input class="form-control" name="surfacein" type="text" id="surfacein" value="{{ isset($weather->surfacein) ? $weather->surfacein : ''}}" >
    {!! $errors->first('surfacein', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drainage') ? 'has-error' : ''}}">
    <label for="drainage" class="control-label">{{ 'Drainage' }}</label>
    <input class="form-control" name="drainage" type="text" id="drainage" value="{{ isset($weather->drainage) ? $weather->drainage : ''}}" >
    {!! $errors->first('drainage', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('snowved') ? 'has-error' : ''}}">
    <label for="snowved" class="control-label">{{ 'Snowved' }}</label>
    <input class="form-control" name="snowved" type="text" id="snowved" value="{{ isset($weather->snowved) ? $weather->snowved : ''}}" >
    {!! $errors->first('snowved', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('finalsnow') ? 'has-error' : ''}}">
    <label for="finalsnow" class="control-label">{{ 'Finalsnow' }}</label>
    <input class="form-control" name="finalsnow" type="text" id="finalsnow" value="{{ isset($weather->finalsnow) ? $weather->finalsnow : ''}}" >
    {!! $errors->first('finalsnow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('finalin') ? 'has-error' : ''}}">
    <label for="finalin" class="control-label">{{ 'Finalin' }}</label>
    <input class="form-control" name="finalin" type="text" id="finalin" value="{{ isset($weather->finalin) ? $weather->finalin : ''}}" >
    {!! $errors->first('finalin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conerror') ? 'has-error' : ''}}">
    <label for="conerror" class="control-label">{{ 'Conerror' }}</label>
    <input class="form-control" name="conerror" type="text" id="conerror" value="{{ isset($weather->conerror) ? $weather->conerror : ''}}" >
    {!! $errors->first('conerror', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxwidth') ? 'has-error' : ''}}">
    <label for="maxwidth" class="control-label">{{ 'Maxwidth' }}</label>
    <input class="form-control" name="maxwidth" type="text" id="maxwidth" value="{{ isset($weather->maxwidth) ? $weather->maxwidth : ''}}" >
    {!! $errors->first('maxwidth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minwidth') ? 'has-error' : ''}}">
    <label for="minwidth" class="control-label">{{ 'Minwidth' }}</label>
    <input class="form-control" name="minwidth" type="text" id="minwidth" value="{{ isset($weather->minwidth) ? $weather->minwidth : ''}}" >
    {!! $errors->first('minwidth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxarea') ? 'has-error' : ''}}">
    <label for="maxarea" class="control-label">{{ 'Maxarea' }}</label>
    <input class="form-control" name="maxarea" type="text" id="maxarea" value="{{ isset($weather->maxarea) ? $weather->maxarea : ''}}" >
    {!! $errors->first('maxarea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minarea') ? 'has-error' : ''}}">
    <label for="minarea" class="control-label">{{ 'Minarea' }}</label>
    <input class="form-control" name="minarea" type="text" id="minarea" value="{{ isset($weather->minarea) ? $weather->minarea : ''}}" >
    {!! $errors->first('minarea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalarea') ? 'has-error' : ''}}">
    <label for="totalarea" class="control-label">{{ 'Totalarea' }}</label>
    <input class="form-control" name="totalarea" type="text" id="totalarea" value="{{ isset($weather->totalarea) ? $weather->totalarea : ''}}" >
    {!! $errors->first('totalarea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('results_maxflow') ? 'has-error' : ''}}">
    <label for="results_maxflow" class="control-label">{{ 'Results Maxflow' }}</label>
    <input class="form-control" name="results_maxflow" type="text" id="results_maxflow" value="{{ isset($weather->results_maxflow) ? $weather->results_maxflow : ''}}" >
    {!! $errors->first('results_maxflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minflow') ? 'has-error' : ''}}">
    <label for="minflow" class="control-label">{{ 'Minflow' }}</label>
    <input class="form-control" name="minflow" type="text" id="minflow" value="{{ isset($weather->minflow) ? $weather->minflow : ''}}" >
    {!! $errors->first('minflow', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxslope') ? 'has-error' : ''}}">
    <label for="maxslope" class="control-label">{{ 'Maxslope' }}</label>
    <input class="form-control" name="maxslope" type="text" id="maxslope" value="{{ isset($weather->maxslope) ? $weather->maxslope : ''}}" >
    {!! $errors->first('maxslope', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minslope') ? 'has-error' : ''}}">
    <label for="minslope" class="control-label">{{ 'Minslope' }}</label>
    <input class="form-control" name="minslope" type="text" id="minslope" value="{{ isset($weather->minslope) ? $weather->minslope : ''}}" >
    {!! $errors->first('minslope', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subcat_maximpness') ? 'has-error' : ''}}">
    <label for="subcat_maximpness" class="control-label">{{ 'Subcat Maximpness' }}</label>
    <input class="form-control" name="subcat_maximpness" type="text" id="subcat_maximpness" value="{{ isset($weather->subcat_maximpness) ? $weather->subcat_maximpness : ''}}" >
    {!! $errors->first('subcat_maximpness', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subcat_minimpness') ? 'has-error' : ''}}">
    <label for="subcat_minimpness" class="control-label">{{ 'Subcat Minimpness' }}</label>
    <input class="form-control" name="subcat_minimpness" type="text" id="subcat_minimpness" value="{{ isset($weather->subcat_minimpness) ? $weather->subcat_minimpness : ''}}" >
    {!! $errors->first('subcat_minimpness', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximpness') ? 'has-error' : ''}}">
    <label for="maximpness" class="control-label">{{ 'Maximpness' }}</label>
    <input class="form-control" name="maximpness" type="text" id="maximpness" value="{{ isset($weather->maximpness) ? $weather->maximpness : ''}}" >
    {!! $errors->first('maximpness', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minimpness') ? 'has-error' : ''}}">
    <label for="minimpness" class="control-label">{{ 'Minimpness' }}</label>
    <input class="form-control" name="minimpness" type="text" id="minimpness" value="{{ isset($weather->minimpness) ? $weather->minimpness : ''}}" >
    {!! $errors->first('minimpness', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subcat_maxperv') ? 'has-error' : ''}}">
    <label for="subcat_maxperv" class="control-label">{{ 'Subcat Maxperv' }}</label>
    <input class="form-control" name="subcat_maxperv" type="text" id="subcat_maxperv" value="{{ isset($weather->subcat_maxperv) ? $weather->subcat_maxperv : ''}}" >
    {!! $errors->first('subcat_maxperv', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subcat_minperv') ? 'has-error' : ''}}">
    <label for="subcat_minperv" class="control-label">{{ 'Subcat Minperv' }}</label>
    <input class="form-control" name="subcat_minperv" type="text" id="subcat_minperv" value="{{ isset($weather->subcat_minperv) ? $weather->subcat_minperv : ''}}" >
    {!! $errors->first('subcat_minperv', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximp') ? 'has-error' : ''}}">
    <label for="maximp" class="control-label">{{ 'Maximp' }}</label>
    <input class="form-control" name="maximp" type="text" id="maximp" value="{{ isset($weather->maximp) ? $weather->maximp : ''}}" >
    {!! $errors->first('maximp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minimp') ? 'has-error' : ''}}">
    <label for="minimp" class="control-label">{{ 'Minimp' }}</label>
    <input class="form-control" name="minimp" type="text" id="minimp" value="{{ isset($weather->minimp) ? $weather->minimp : ''}}" >
    {!! $errors->first('minimp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maxperv') ? 'has-error' : ''}}">
    <label for="maxperv" class="control-label">{{ 'Maxperv' }}</label>
    <input class="form-control" name="maxperv" type="text" id="maxperv" value="{{ isset($weather->maxperv) ? $weather->maxperv : ''}}" >
    {!! $errors->first('maxperv', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('minperv') ? 'has-error' : ''}}">
    <label for="minperv" class="control-label">{{ 'Minperv' }}</label>
    <input class="form-control" name="minperv" type="text" id="minperv" value="{{ isset($weather->minperv) ? $weather->minperv : ''}}" >
    {!! $errors->first('minperv', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gages') ? 'has-error' : ''}}">
    <label for="gages" class="control-label">{{ 'Gages' }}</label>
    <input class="form-control" name="gages" type="text" id="gages" value="{{ isset($weather->gages) ? $weather->gages : ''}}" >
    {!! $errors->first('gages', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aquifers') ? 'has-error' : ''}}">
    <label for="aquifers" class="control-label">{{ 'Aquifers' }}</label>
    <input class="form-control" name="aquifers" type="text" id="aquifers" value="{{ isset($weather->aquifers) ? $weather->aquifers : ''}}" >
    {!! $errors->first('aquifers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('snowpacks') ? 'has-error' : ''}}">
    <label for="snowpacks" class="control-label">{{ 'Snowpacks' }}</label>
    <input class="form-control" name="snowpacks" type="text" id="snowpacks" value="{{ isset($weather->snowpacks) ? $weather->snowpacks : ''}}" >
    {!! $errors->first('snowpacks', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unitgraphs') ? 'has-error' : ''}}">
    <label for="unitgraphs" class="control-label">{{ 'Unitgraphs' }}</label>
    <input class="form-control" name="unitgraphs" type="text" id="unitgraphs" value="{{ isset($weather->unitgraphs) ? $weather->unitgraphs : ''}}" >
    {!! $errors->first('unitgraphs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transects') ? 'has-error' : ''}}">
    <label for="transects" class="control-label">{{ 'Transects' }}</label>
    <input class="form-control" name="transects" type="text" id="transects" value="{{ isset($weather->transects) ? $weather->transects : ''}}" >
    {!! $errors->first('transects', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('curves') ? 'has-error' : ''}}">
    <label for="curves" class="control-label">{{ 'Curves' }}</label>
    <input class="form-control" name="curves" type="text" id="curves" value="{{ isset($weather->curves) ? $weather->curves : ''}}" >
    {!! $errors->first('curves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diverves') ? 'has-error' : ''}}">
    <label for="diverves" class="control-label">{{ 'Diverves' }}</label>
    <input class="form-control" name="diverves" type="text" id="diverves" value="{{ isset($weather->diverves) ? $weather->diverves : ''}}" >
    {!! $errors->first('diverves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_pumpves') ? 'has-error' : ''}}">
    <label for="unused_pumpves" class="control-label">{{ 'Unused Pumpves' }}</label>
    <input class="form-control" name="unused_pumpves" type="text" id="unused_pumpves" value="{{ isset($weather->unused_pumpves) ? $weather->unused_pumpves : ''}}" >
    {!! $errors->first('unused_pumpves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_ratingves') ? 'has-error' : ''}}">
    <label for="unused_ratingves" class="control-label">{{ 'Unused Ratingves' }}</label>
    <input class="form-control" name="unused_ratingves" type="text" id="unused_ratingves" value="{{ isset($weather->unused_ratingves) ? $weather->unused_ratingves : ''}}" >
    {!! $errors->first('unused_ratingves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_shapeves') ? 'has-error' : ''}}">
    <label for="unused_shapeves" class="control-label">{{ 'Unused Shapeves' }}</label>
    <input class="form-control" name="unused_shapeves" type="text" id="unused_shapeves" value="{{ isset($weather->unused_shapeves) ? $weather->unused_shapeves : ''}}" >
    {!! $errors->first('unused_shapeves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('storageves') ? 'has-error' : ''}}">
    <label for="storageves" class="control-label">{{ 'Storageves' }}</label>
    <input class="form-control" name="storageves" type="text" id="storageves" value="{{ isset($weather->storageves) ? $weather->storageves : ''}}" >
    {!! $errors->first('storageves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_tidalves') ? 'has-error' : ''}}">
    <label for="unused_tidalves" class="control-label">{{ 'Unused Tidalves' }}</label>
    <input class="form-control" name="unused_tidalves" type="text" id="unused_tidalves" value="{{ isset($weather->unused_tidalves) ? $weather->unused_tidalves : ''}}" >
    {!! $errors->first('unused_tidalves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_weirves') ? 'has-error' : ''}}">
    <label for="unused_weirves" class="control-label">{{ 'Unused Weirves' }}</label>
    <input class="form-control" name="unused_weirves" type="text" id="unused_weirves" value="{{ isset($weather->unused_weirves) ? $weather->unused_weirves : ''}}" >
    {!! $errors->first('unused_weirves', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unused_timeseries') ? 'has-error' : ''}}">
    <label for="unused_timeseries" class="control-label">{{ 'Unused Timeseries' }}</label>
    <input class="form-control" name="unused_timeseries" type="text" id="unused_timeseries" value="{{ isset($weather->unused_timeseries) ? $weather->unused_timeseries : ''}}" >
    {!! $errors->first('unused_timeseries', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('timepatts') ? 'has-error' : ''}}">
    <label for="timepatts" class="control-label">{{ 'Timepatts' }}</label>
    <input class="form-control" name="timepatts" type="text" id="timepatts" value="{{ isset($weather->timepatts) ? $weather->timepatts : ''}}" >
    {!! $errors->first('timepatts', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ1') ? 'has-error' : ''}}">
    <label for="invertevsJ1" class="control-label">{{ 'Invertevsj1' }}</label>
    <input class="form-control" name="invertevsJ1" type="text" id="invertevsJ1" value="{{ isset($weather->invertevsJ1) ? $weather->invertevsJ1 : ''}}" >
    {!! $errors->first('invertevsJ1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ2') ? 'has-error' : ''}}">
    <label for="invertevsJ2" class="control-label">{{ 'Invertevsj2' }}</label>
    <input class="form-control" name="invertevsJ2" type="text" id="invertevsJ2" value="{{ isset($weather->invertevsJ2) ? $weather->invertevsJ2 : ''}}" >
    {!! $errors->first('invertevsJ2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ3') ? 'has-error' : ''}}">
    <label for="invertevsJ3" class="control-label">{{ 'Invertevsj3' }}</label>
    <input class="form-control" name="invertevsJ3" type="text" id="invertevsJ3" value="{{ isset($weather->invertevsJ3) ? $weather->invertevsJ3 : ''}}" >
    {!! $errors->first('invertevsJ3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ4') ? 'has-error' : ''}}">
    <label for="invertevsJ4" class="control-label">{{ 'Invertevsj4' }}</label>
    <input class="form-control" name="invertevsJ4" type="text" id="invertevsJ4" value="{{ isset($weather->invertevsJ4) ? $weather->invertevsJ4 : ''}}" >
    {!! $errors->first('invertevsJ4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ3_1') ? 'has-error' : ''}}">
    <label for="invertevsJ3_1" class="control-label">{{ 'Invertevsj3 1' }}</label>
    <input class="form-control" name="invertevsJ3_1" type="text" id="invertevsJ3_1" value="{{ isset($weather->invertevsJ3_1) ? $weather->invertevsJ3_1 : ''}}" >
    {!! $errors->first('invertevsJ3_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invertevsJ3_2') ? 'has-error' : ''}}">
    <label for="invertevsJ3_2" class="control-label">{{ 'Invertevsj3 2' }}</label>
    <input class="form-control" name="invertevsJ3_2" type="text" id="invertevsJ3_2" value="{{ isset($weather->invertevsJ3_2) ? $weather->invertevsJ3_2 : ''}}" >
    {!! $errors->first('invertevsJ3_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ1') ? 'has-error' : ''}}">
    <label for="rimJ1" class="control-label">{{ 'Rimj1' }}</label>
    <input class="form-control" name="rimJ1" type="text" id="rimJ1" value="{{ isset($weather->rimJ1) ? $weather->rimJ1 : ''}}" >
    {!! $errors->first('rimJ1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ2') ? 'has-error' : ''}}">
    <label for="rimJ2" class="control-label">{{ 'Rimj2' }}</label>
    <input class="form-control" name="rimJ2" type="text" id="rimJ2" value="{{ isset($weather->rimJ2) ? $weather->rimJ2 : ''}}" >
    {!! $errors->first('rimJ2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ3') ? 'has-error' : ''}}">
    <label for="rimJ3" class="control-label">{{ 'Rimj3' }}</label>
    <input class="form-control" name="rimJ3" type="text" id="rimJ3" value="{{ isset($weather->rimJ3) ? $weather->rimJ3 : ''}}" >
    {!! $errors->first('rimJ3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ4') ? 'has-error' : ''}}">
    <label for="rimJ4" class="control-label">{{ 'Rimj4' }}</label>
    <input class="form-control" name="rimJ4" type="text" id="rimJ4" value="{{ isset($weather->rimJ4) ? $weather->rimJ4 : ''}}" >
    {!! $errors->first('rimJ4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ3_1') ? 'has-error' : ''}}">
    <label for="rimJ3_1" class="control-label">{{ 'Rimj3 1' }}</label>
    <input class="form-control" name="rimJ3_1" type="text" id="rimJ3_1" value="{{ isset($weather->rimJ3_1) ? $weather->rimJ3_1 : ''}}" >
    {!! $errors->first('rimJ3_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rimJ3_2') ? 'has-error' : ''}}">
    <label for="rimJ3_2" class="control-label">{{ 'Rimj3 2' }}</label>
    <input class="form-control" name="rimJ3_2" type="text" id="rimJ3_2" value="{{ isset($weather->rimJ3_2) ? $weather->rimJ3_2 : ''}}" >
    {!! $errors->first('rimJ3_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ1') ? 'has-error' : ''}}">
    <label for="totalmgJ1" class="control-label">{{ 'Totalmgj1' }}</label>
    <input class="form-control" name="totalmgJ1" type="text" id="totalmgJ1" value="{{ isset($weather->totalmgJ1) ? $weather->totalmgJ1 : ''}}" >
    {!! $errors->first('totalmgJ1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ2') ? 'has-error' : ''}}">
    <label for="totalmgJ2" class="control-label">{{ 'Totalmgj2' }}</label>
    <input class="form-control" name="totalmgJ2" type="text" id="totalmgJ2" value="{{ isset($weather->totalmgJ2) ? $weather->totalmgJ2 : ''}}" >
    {!! $errors->first('totalmgJ2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ3') ? 'has-error' : ''}}">
    <label for="totalmgJ3" class="control-label">{{ 'Totalmgj3' }}</label>
    <input class="form-control" name="totalmgJ3" type="text" id="totalmgJ3" value="{{ isset($weather->totalmgJ3) ? $weather->totalmgJ3 : ''}}" >
    {!! $errors->first('totalmgJ3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ4') ? 'has-error' : ''}}">
    <label for="totalmgJ4" class="control-label">{{ 'Totalmgj4' }}</label>
    <input class="form-control" name="totalmgJ4" type="text" id="totalmgJ4" value="{{ isset($weather->totalmgJ4) ? $weather->totalmgJ4 : ''}}" >
    {!! $errors->first('totalmgJ4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ3_1') ? 'has-error' : ''}}">
    <label for="totalmgJ3_1" class="control-label">{{ 'Totalmgj3 1' }}</label>
    <input class="form-control" name="totalmgJ3_1" type="text" id="totalmgJ3_1" value="{{ isset($weather->totalmgJ3_1) ? $weather->totalmgJ3_1 : ''}}" >
    {!! $errors->first('totalmgJ3_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalmgJ3_2') ? 'has-error' : ''}}">
    <label for="totalmgJ3_2" class="control-label">{{ 'Totalmgj3 2' }}</label>
    <input class="form-control" name="totalmgJ3_2" type="text" id="totalmgJ3_2" value="{{ isset($weather->totalmgJ3_2) ? $weather->totalmgJ3_2 : ''}}" >
    {!! $errors->first('totalmgJ3_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('report_generate') ? 'has-error' : ''}}">
    <label for="report_generate" class="control-label">{{ 'Report Generate' }}</label>
    <input class="form-control" name="report_generate" type="text" id="report_generate" value="{{ isset($weather->report_generate) ? $weather->report_generate : ''}}" >
    {!! $errors->first('report_generate', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
