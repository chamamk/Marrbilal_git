<div class="profile-tab-nav border-right">
    <div class="p-4">
        <h4 class="text-center">Mar Bilal</h4>
    </div>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link" id="account-tab"  href="/Profile">
            <i class="fa fa-home text-center mr-1"></i>
            Votre Profile
        </a>
        <a class="nav-link" id="paiment-tab" href="{{ route('modepayment.index') }}">
            <i class="fa fa-credit-card text-center mr-1"></i>
            Mode Paiements
        </a>
        <a class="nav-link" id="marber-tab" href="{{ route('typemarbre.index') }}">
            <i class="fa fa-list text-center mr-1"></i>
            Type Marbre
        </a>
    </div>
</div>
